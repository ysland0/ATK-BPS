<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::orderBy('nama_supplier', 'asc')->get();
        return view('masterSupplier', compact('suppliers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_supplier' => 'required|unique:suppliers',
            'nama_supplier' => 'required',
            'nama_pic'      => 'required',
            'telp_pic'      => 'required',
            'alamat'        => 'required',
            'email'         => 'required|email',
        ]);

        Supplier::create($request->all());
        return redirect()->back()->with('success', 'Supplier berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());
        return redirect()->back()->with('success', 'Data supplier berhasil diubah!');
    }

    public function destroy($id)
    {
        Supplier::destroy($id);
        return redirect()->back()->with('success', 'Supplier berhasil dihapus!');
    }
}