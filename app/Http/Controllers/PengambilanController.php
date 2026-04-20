<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Pengambilan; 
use App\Models\Pegawai;
use App\Models\Barang;

class PengambilanController extends Controller
{
    public function index(Request $request)
    {
        $jenis = $request->get('jenis', 'bulanan');
        $tanggal = $request->get('tanggal');
        $bulan = $request->get('bulan', date('m'));
        $tahun = $request->get('tahun', date('Y'));

        $queryHarian = Pengambilan::leftJoin('barangs', function($join) {
            $join->on(DB::raw('trim(pengambilans.nama_barang)'), '=', DB::raw('trim(barangs.nama_barang)'));
        })
        ->select('pengambilans.*', 'barangs.kode_barang', 'barangs.satuan as satuan_barang');

        $queryRekap = Pengambilan::leftJoin('barangs', function($join) {
            $join->on(DB::raw('trim(pengambilans.nama_barang)'), '=', DB::raw('trim(barangs.nama_barang)'));
        })
        ->select(
            'pengambilans.tanggal',
            'barangs.kode_barang',
            'pengambilans.nama_barang',
            'barangs.satuan',
            DB::raw('SUM(pengambilans.jumlah) as total_diambil')
        )
        ->groupBy('pengambilans.tanggal', 'barangs.kode_barang', 'pengambilans.nama_barang', 'barangs.satuan');

        if ($jenis == 'harian' && !empty($tanggal)) {
            $queryHarian->whereDate('pengambilans.tanggal', $tanggal);
            $queryRekap->whereDate('pengambilans.tanggal', $tanggal);
        } else {
            $queryHarian->whereMonth('pengambilans.tanggal', $bulan)
                        ->whereYear('pengambilans.tanggal', $tahun);
            $queryRekap->whereMonth('pengambilans.tanggal', $bulan)
                    ->whereYear('pengambilans.tanggal', $tahun);
        }

        $pengambilans = $queryHarian->orderBy('pengambilans.tanggal', 'desc')
                                    ->orderBy('pengambilans.created_at', 'desc')
                                    ->get();

        $rekapBulanan = $queryRekap->orderBy('pengambilans.tanggal', 'desc')->get();

        return view('laporanPengambilan', compact('pengambilans', 'rekapBulanan'));
    }

    public function create()
    {
        $pegawais = Pegawai::orderBy('nama', 'asc')->get();
        $barangs = Barang::orderBy('nama_barang', 'asc')->get();

        return view('pengambilan', compact('pegawais', 'barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'tanggal' => 'required|date',
            'nama_barang' => 'required',
            'jumlah' => 'required|numeric|min:1',
            'tanda_tangan' => 'required',
        ]);

        $barang = Barang::where('nama_barang', $request->nama_barang)->first();
        if (!$barang) {
            return back()->withErrors(['error' => 'Barang tidak ditemukan di database!']);
        }

        if ($barang->stok < $request->jumlah) {
            return back()->withErrors(['error' => 'Maaf, stok barang tidak mencukupi!']);
        }

        DB::transaction(function () use ($request, $barang) {
            Pengambilan::create([
                'nama_pegawai' => $request->nama_pegawai,
                'tanggal' => $request->tanggal,
                'nama_barang' => $request->nama_barang,
                'jumlah' => $request->jumlah,
                'tanda_tangan' => $request->tanda_tangan,
            ]);

            $barang->decrement('stok', $request->jumlah);
        });

            return redirect()->back()->with('success', '✅ Pengambilan berhasil! Stok ' . $request->nama_barang . ' otomatis berkurang.');
    }

    public function destroy($id)
    {
        $data = Pengambilan::findOrFail($id);
        $data->delete();

        return back()->with('success', 'Data berhasil dihapus!');
    }
}
