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
        // 1. Tangkap filter bulan dan tahun (default bulan & tahun sekarang)
        $bulan = $request->get('bulan', date('m'));
        $tahun = $request->get('tahun', date('Y'));

        // 2. Ambil data PEMASUKAN (Pembelian & Transfer)
        $pemasukan = Pemasukan::with('barang')
            ->whereMonth('tanggal_pemasukan', $bulan)
            ->whereYear('tanggal_pemasukan', $tahun)
            ->get()
            ->map(function ($item) {
                return [
                    'tanggal' => $item->tanggal_pemasukan,
                    'jenis'   => strtoupper($item->tipe_pemasukan), // PEMBELIAN / TRANSFER
                    'kode'    => $item->barang->kode_barang ?? '-',
                    'nama'    => $item->barang->nama_barang ?? '-',
                    'jumlah'  => $item->jumlah,
                    'satuan'  => $item->barang->satuan ?? '-',
                    'harga'   => $item->harga_satuan ?? 0,
                    'bukti'   => $item->no_surat_jalan ?? '-',
                    'tag_id'  => $item->supplier ?? 'PUSAT',
                    'masuk'   => $item->jumlah,
                    'keluar'  => 0,
                ];
            });

        // 3. Ambil data PENGAMBILAN (Pakai)
        $pengambilan = Pengambilan::leftJoin('barangs', 'pengambilans.nama_barang', '=', 'barangs.nama_barang')
            ->select('pengambilans.*', 'barangs.kode_barang', 'barangs.satuan')
            ->whereMonth('pengambilans.tanggal', $bulan)
            ->whereYear('pengambilans.tanggal', $tahun)
            ->get()
            ->map(function ($item) {
                return [
                    'tanggal' => $item->tanggal,
                    'jenis'   => 'PAKAI',
                    'kode'    => $item->kode_barang ?? '-',
                    'nama'    => $item->nama_barang ?? '-',
                    'jumlah'  => $item->jumlah,
                    'satuan'  => $item->satuan ?? '-',
                    'harga'   => 0,
                    'bukti'   => '-', // Biasanya No. Bukti Pengambilan jika ada
                    'tag_id'  => $item->nama_pegawai,
                    'masuk'   => 0,
                    'keluar'  => $item->jumlah,
                ];
            });

        // 4. Gabungkan dan Urutkan berdasarkan tanggal
        $allData = $pemasukan->concat($pengambilan)->sortBy('tanggal');

        return view('laporanRinciBulanan', compact('allData', 'bulan', 'tahun'));
    }
}