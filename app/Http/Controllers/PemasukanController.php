<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class PemasukanController extends Controller
{
    public function create()
    {
        $barangs = \App\Models\Barang::orderBy('nama_barang', 'asc')->get();
        $suppliers = \App\Models\Supplier::orderBy('nama_supplier', 'asc')->get();

        $riwayatPemasukan = \App\Models\Pemasukan::leftJoin('barangs', 'pemasukans.barang_id', '=', 'barangs.id')
            ->select('pemasukans.*', 'barangs.nama_barang', 'barangs.satuan')
            ->orderBy('pemasukans.tanggal_pemasukan', 'desc')
            ->orderBy('pemasukans.created_at', 'desc')
            ->get();

        return view('pemasukanBarang', compact('barangs', 'suppliers', 'riwayatPemasukan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe_pemasukan' => 'required',
            'barang_id' => 'required', 
            'jumlah' => 'required|numeric|min:1',
            'tanggal_pemasukan' => 'required|date',
            'satuan_harga' => 'nullable|numeric', 
        ]);

        $supplierOtomatis = ($request->tipe_pemasukan == 'transfer') ? 'PUSAT' : $request->supplier;

        \DB::transaction(function () use ($request, $supplierOtomatis) {
            Pemasukan::create([
                'tipe_pemasukan' => $request->tipe_pemasukan,
                'supplier'       => $supplierOtomatis, 
                'no_surat_jalan' => $request->no_surat_jalan,
                'barang_id'      => $request->barang_id,
                'jumlah'         => $request->jumlah, 
                'satuan_harga'   => $request->satuan_harga ?? 0,
                'tanggal_pemasukan' => $request->tanggal_pemasukan,
                'keterangan'     => $request->keterangan,
            ]);

            $barang = Barang::find($request->barang_id);
            if ($barang) {
                $barang->increment('stok', $request->jumlah); 
            }
        });

        return redirect()->back()->with('success', '✅ Data pemasukan berhasil disimpan!');
    }

    public function destroy($id)
    {
        $pemasukan = \App\Models\Pemasukan::findOrFail($id);
        
        // Logika Opsional: Apakah saat riwayat dihapus, stok barang juga harus berkurang lagi?
        // Biasanya iya, agar datanya sinkron kembali.
        $barang = \App\Models\Barang::find($pemasukan->barang_id);
        if ($barang) {
            $barang->decrement('stok', $pemasukan->jumlah);
        }

        $pemasukan->delete();
        return back()->with('success', 'Data pemasukan berhasil dihapus dan stok disesuaikan.');
    }
}