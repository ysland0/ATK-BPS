<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\Pegawai; // Tambahkan ini agar lebih rapi
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    // Ini fungsi yang dipanggil saat buka halaman /permohonan
    public function indexPegawai() {
        // Ambil data pegawai dari database
        $pegawais = Pegawai::orderBy('nama', 'asc')->get();
        
        // Kirim data ke view
        return view('permohonan', compact('pegawais'));
    }

    public function store(Request $request) {
        // Validasi input
        $request->validate([
            'nama_pegawai' => 'required',
            'request_barang' => 'required',
        ]);

        // Simpan ke database
        Permohonan::create([
            'nama_pegawai' => $request->nama_pegawai,
            'request_barang' => $request->request_barang,
            'status' => 'pending' // status awal
        ]);

        return response()->json(['success' => true]);
    }

    public function indexAdmin() {
        $permohonans = Permohonan::orderBy('created_at', 'desc')->get();
        return view('laporanPermohonan', compact('permohonans'));
    }

    public function updateStatus($id, $status) {
        $permohonan = Permohonan::findOrFail($id);
        $permohonan->update(['status' => $status]);
        return back()->with('success', 'Status berhasil diupdate');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pegawai'   => 'required',
            'request_barang' => 'required',
            'status'         => 'required|in:pending,diterima,ditolak',
        ]);

        $permohonan = Permohonan::findOrFail($id);
        $permohonan->update([
            'nama_pegawai'   => $request->nama_pegawai,
            'request_barang' => $request->request_barang,
            'status'         => $request->status,
        ]);

        return back()->with('success', 'Data permohonan berhasil diubah!');
    }
    
    public function destroy($id) {
        \App\Models\Permohonan::destroy($id);
        return back()->with('success', 'Data berhasil dihapus');
    }
}