<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Pemasukan;
use App\Models\Pengambilan;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PersediaanExport;

class KartuKendaliController extends Controller
{
    public function index()
    {
        $barangs = Barang::orderBy('nama_barang', 'asc')->get();
        return view('kartuKendali', compact('barangs'));
    }

    public function getBarangData($id)
    {
        $barang = Barang::findOrFail($id);
        $tahun  = request('tahun', date('Y'));

        // 1. Hitung pengeluaran per bulan (Januari - Desember)
        $bulanan = [];
        for ($m = 1; $m <= 12; $m++) {
            $bulanan[$m] = Pengambilan::where('nama_barang', $barang->nama_barang)
                ->where('status', 'approved')
                ->whereMonth('tanggal', $m)
                ->whereYear('tanggal', $tahun)
                ->sum('jumlah');
        }

        // 2. Ambil riwayat pemasukan
        $pemasukan = Pemasukan::where('barang_id', $id)
            ->whereYear('tanggal_pemasukan', $tahun)
            ->get()
            ->map(function ($item) {
                return [
                    'tanggal' => $item->tanggal_pemasukan,
                    'bukti'   => $item->no_surat_jalan ?? '-',
                    'uraian'  => 'Pemasukan: ' . ($item->supplier ?? 'PUSAT'),
                    'masuk'   => $item->jumlah,
                    'keluar'  => 0,
                ];
            });

        // 3. Ambil riwayat pengambilan (approved)
        $pengambilan = Pengambilan::where('nama_barang', $barang->nama_barang)
            ->where('status', 'approved')
            ->whereYear('tanggal', $tahun)
            ->get()
            ->map(function ($item) {
                return [
                    'tanggal' => $item->tanggal,
                    'bukti'   => $item->no_bukti ?? '-',
                    'uraian'  => 'Dipakai: ' . ($item->nama_pegawai ?? '-'),
                    'masuk'   => 0,
                    'keluar'  => $item->jumlah,
                ];
            });

        // 4. Gabungkan, urutkan, dan hitung saldo berjalan
        $logsRaw = $pemasukan->concat($pengambilan)->sortBy('tanggal')->values();

        $saldo = (int) ($barang->stok_awal ?? 0);
        $logs  = [];
        foreach ($logsRaw as $l) {
            $saldo        = $saldo + $l['masuk'] - $l['keluar'];
            $l['sisa']    = $saldo;
            $logs[]       = (object) $l;
        }

        // Hitung ringkasan bulanan
        $totalKeluar = array_sum($bulanan);
        $stokAkhir   = (int) ($barang->stok_awal ?? 0) - $totalKeluar;

        // 5. Export Excel jika diminta
        if (request('export') === 'excel') {
            $dataExport = compact('barang', 'bulanan', 'logs', 'tahun');
            $filename   = 'Kartu_Kendali_' . str_replace(' ', '_', $barang->nama_barang) . '_' . $tahun . '.xlsx';
            return Excel::download(new PersediaanExport($dataExport), $filename);
        }

        // 6. Return HTML (AJAX)
        return response()->json([
            'html' => view('exports.persediaan', compact('barang', 'bulanan', 'logs', 'tahun', 'totalKeluar', 'stokAkhir'))->render(),
        ]);
    }
}