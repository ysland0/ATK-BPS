<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::orderBy('nama_barang', 'asc')->get();
        return view('masterBarang', compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|unique:barangs',
            'nama_barang' => 'required',
            'satuan'      => 'required',
            'kategori'    => 'required',
            'stok_awal'   => 'required|numeric|min:0',
        ]);

        // Saat tambah baru, stok saat ini disamakan dengan stok awal
        $data = $request->all();
        $data['stok'] = $request->stok_awal;

        Barang::create($data);
        return redirect()->back()->with('success', 'Barang berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->update($request->all());
        return redirect()->back()->with('success', 'Data barang berhasil diubah!');
    }

    public function destroy($id)
    {
        Barang::destroy($id);
        return redirect()->back()->with('success', 'Barang berhasil dihapus!');
    }
}