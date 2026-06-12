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
        ->select('pengambilans.*', 'barangs.kode_barang', 'barangs.satuan as satuan_barang')
        ->where('pengambilans.status', 'approved');

        $queryRekap = Pengambilan::leftJoin('barangs', function($join) {
        $join->on(DB::raw('trim(pengambilans.nama_barang)'), '=', DB::raw('trim(barangs.nama_barang)'));
        })

        ->select(
            'pengambilans.tanggal',
            'pengambilans.no_bukti',
            'barangs.kode_barang',
            'pengambilans.nama_barang',
            'barangs.satuan',
            DB::raw('SUM(pengambilans.jumlah) as total_diambil')
        )
        ->where('pengambilans.status', 'approved') 
        ->groupBy('pengambilans.tanggal', 'pengambilans.no_bukti', 'barangs.kode_barang', 'pengambilans.nama_barang', 'barangs.satuan');

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

        $barangs = Barang::orderBy('nama_barang', 'asc')->get();
        $pegawais = Pegawai::orderBy('nama', 'asc')->get();
        return view('laporanPengambilan', compact('pengambilans', 'rekapBulanan', 'barangs', 'pegawais'));
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
            'nama_pegawai'  => 'required',
            'tanggal'       => 'required',
            'nama_barang'   => 'required|array',
            'nama_barang.*' => 'required',
            'jumlah'        => 'required|array',
            'jumlah.*'      => 'required|numeric|min:1',
            'tanda_tangan'  => 'required',
        ]);

        $namaBarangs = $request->nama_barang;
        $jumlahs     = $request->jumlah;

        // Cek stok semua item dulu sebelum insert
        foreach ($namaBarangs as $i => $namaBarang) {
            $barang = Barang::where('nama_barang', $namaBarang)->first();
            $jumlah = $jumlahs[$i];

            if (!$barang || $barang->stok < $jumlah) {
                return back()
                    ->with('error', "Stok barang \"$namaBarang\" tidak mencukupi!")
                    ->withInput();
            }
        }

        // Simpan semua item
        foreach ($namaBarangs as $i => $namaBarang) {
            Pengambilan::create([
                'nama_pegawai' => $request->nama_pegawai,
                'tanggal'      => $request->tanggal,
                'nama_barang'  => $namaBarang,
                'jumlah'       => $jumlahs[$i],
                'tanda_tangan' => $request->tanda_tangan,
                'status'       => 'pending',
            ]);
        }

        return redirect()->back()->with('success', '✅ Permohonan dikirim! Menunggu persetujuan admin.');
    }

    public function approve($id)
    {
        $pengambilan = Pengambilan::findOrFail($id);
        $barang = Barang::where('nama_barang', $pengambilan->nama_barang)->first();

        if (!$barang || $barang->stok < $pengambilan->jumlah) {
            return back()->with('error', 'Gagal! Stok barang tidak mencukupi.');
        }

        $tglData = $pengambilan->tanggal; 
        $bulan = date('m', strtotime($tglData));
        $tahun = date('Y', strtotime($tglData));

        $daftarHariUnik = Pengambilan::whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->distinct()
            ->orderBy('tanggal', 'asc')
            ->pluck('tanggal')
            ->toArray();

        $urutanHari = array_search($tglData, $daftarHariUnik) + 1;
        $noBuktiFix = "3374-" . $urutanHari;
        
        DB::transaction(function () use ($pengambilan, $barang, $noBuktiFix) {
            $barang->decrement('stok', $pengambilan->jumlah);
            $pengambilan->update([
                'status' => 'approved',
                'no_bukti' => $noBuktiFix
            ]);
        });

        return back()->with('success', 'Disetujui! No Bukti: ' . $noBuktiFix);
    }

    public function reject($id)
    {
        $pengambilan = Pengambilan::findOrFail($id);
        $pengambilan->update(['status' => 'rejected']);

        return back()->with('success', 'Permohonan ' . $pengambilan->nama_pegawai . ' telah ditolak.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|numeric|min:1',
        ]);

        $pengambilan = Pengambilan::findOrFail($id);
        $barangLama = Barang::where('nama_barang', $pengambilan->nama_barang)->first();
        $barangBaru = Barang::where('nama_barang', $request->nama_barang)->first();

        if (!$barangBaru) {
            return back()->with('error', 'Barang tidak ditemukan!');
        }

        try {
            DB::transaction(function () use ($pengambilan, $barangLama, $barangBaru, $request) {
                if ($barangLama) {
                    $barangLama->increment('stok', $pengambilan->jumlah);
                }
                if ($barangBaru->fresh()->stok < $request->jumlah) {
                    throw new \Exception('Stok tidak mencukupi!');
                }
                $barangBaru->decrement('stok', $request->jumlah);

                $updateData = [
                    'nama_barang' => $request->nama_barang,
                    'jumlah'      => $request->jumlah,
                ];

                // Kalau nama pegawai diisi, ganti nama + TTD
                if ($request->filled('nama_pegawai')) {
                    $updateData['nama_pegawai'] = $request->nama_pegawai;
                    $updateData['tanda_tangan'] = $request->tanda_tangan;
                }

                // Pastikan updated_at tidak mengubah created_at (jam di tabel tetap)
                $pengambilan->timestamps = false;
                $pengambilan->update($updateData);
                $pengambilan->timestamps = true;
            });
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }

        return back()->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $data = Pengambilan::findOrFail($id);
        $data->delete();

        return back()->with('success', 'Data berhasil dihapus!');
    }
}
