<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::orderBy('nama', 'asc')->get();
        return view('masterPegawai', compact('pegawais'));
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        Pegawai::create($request->all());
        return redirect()->back()->with('success', 'Pegawai berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate(['nama' => 'required|string|max:255']);
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());
        return redirect()->back()->with('success', 'Data pegawai berhasil diubah!');
    }

    public function destroy($id)
    {
        Pegawai::destroy($id);
        return redirect()->back()->with('success', 'Pegawai berhasil dihapus!');
    }
}