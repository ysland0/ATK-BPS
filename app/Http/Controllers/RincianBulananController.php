<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Pengambilan;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class RincianBulananController extends Controller
{
    public function rinciBulanan(Request $request)
    {
        $bulan = $request->get('bulan', date('m'));
        $tahun = $request->get('tahun', date('Y'));

        $pemasukan = \App\Models\Pemasukan::leftJoin('barangs', 'pemasukans.barang_id', '=', 'barangs.id')
        ->select('pemasukans.*', 'barangs.kode_barang', 'barangs.nama_barang as nama_asli', 'barangs.satuan as satuan_asli')
        ->whereMonth('pemasukans.tanggal_pemasukan', $bulan)
        ->whereYear('pemasukans.tanggal_pemasukan', $tahun)
        ->get()
        ->map(function ($item) {
            $harga = $item->harga_satuan ?? 0;
            return [
                    'jenis' => $item->tipe_pemasukan == 'pembelian' ? 'BELI' : 'TRANSFER',
                    'kode' => $item->barang->kode_barang ?? '-',
                    'nama' => $item->barang->nama_barang ?? '-',
                    'jumlah' => $item->jumlah,
                    'satuan' => $item->barang->satuan ?? 'Buah',
                    'tgl_buku' => $item->created_at->format('d/m/Y'),
                    'harga_sat' => $item->harga_satuan ?? 0,
                    'total_harga' => ($item->harga_satuan ?? 0) * $item->jumlah,
                    'tanggal_dokumen' => \Carbon\Carbon::parse($item->tanggal_pemasukan)->format('d/m/Y'), 
                    'no_bukti' => $item->no_surat_jalan ?? '-', 
                    'tag_id' => $item->supplier ?? 'PUSAT',
                    'tanggal_raw' => $item->tanggal_pemasukan 
                ];
            });

        $pengambilan = \App\Models\Pengambilan::leftJoin('barangs', function($join) {
            $join->on(DB::raw('trim(pengambilans.nama_barang)'), '=', DB::raw('trim(barangs.nama_barang)'));
        })
        ->select('pengambilans.*', 'barangs.kode_barang', 'barangs.satuan as satuan_asli')
        ->where('pengambilans.status', 'approved')
        ->whereMonth('pengambilans.tanggal', $bulan)
        ->whereYear('pengambilans.tanggal', $tahun)
        ->get()
        ->map(function ($item) {
                return [
                    'jenis' => 'PAKAI',
                    'kode' => $item->kode_barang ?? '-',
                    'nama' => $item->nama_barang ?? '-',
                    'jumlah' => $item->jumlah,
                    'satuan' => 'Buah',
                    'tgl_buku' => $item->created_at->format('d/m/Y'),
                    'harga_sat' => 0,
                    'total_harga' => 0,
                    'tanggal_dokumen' => \Carbon\Carbon::parse($item->tanggal)->format('d/m/Y'), 
                    'no_bukti' => $item->no_bukti ?? '-',
                    'tag_id' => $item->nama_pegawai,
                    'pemasukan' => 0,
                    'pengambilan' => 1,
                    'tanggal_raw' => $item->tanggal 
                ];
            });

        $saldoAwalPerBarang = [];

        $semuaBarang = \App\Models\Barang::all();

        foreach ($semuaBarang as $barang) {
            $totalMasuk = \App\Models\Pemasukan::where('barang_id', $barang->id)
                ->where(function($q) use ($bulan, $tahun) {
                    $q->whereYear('tanggal_pemasukan', '<', $tahun)
                    ->orWhere(function($q2) use ($bulan, $tahun) {
                        $q2->whereYear('tanggal_pemasukan', $tahun)
                            ->whereMonth('tanggal_pemasukan', '<', $bulan);
                    });
                })
                ->sum('jumlah');

            $totalKeluar = \App\Models\Pengambilan::where('nama_barang', $barang->nama_barang)
                ->where('status', 'approved')
                ->where(function($q) use ($bulan, $tahun) {
                    $q->whereYear('tanggal', '<', $tahun)
                    ->orWhere(function($q2) use ($bulan, $tahun) {
                        $q2->whereYear('tanggal', $tahun)
                            ->whereMonth('tanggal', '<', $bulan);
                    });
                })
                ->sum('jumlah');

            $saldoAwalPerBarang[$barang->kode_barang] = [
                'kode'   => $barang->kode_barang,
                'nama'   => $barang->nama_barang,
                'satuan' => $barang->satuan,
                'saldo'  => $barang->stok_awal + $totalMasuk - $totalKeluar
            ];

        }
        $allData = $pemasukan->concat($pengambilan)->sortBy('tanggal_raw');

        return view('laporanRinciBulanan', compact('allData', 'bulan', 'tahun', 'saldoAwalPerBarang'));
    }
}