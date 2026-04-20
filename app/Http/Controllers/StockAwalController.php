<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB; 
use App\Models\Barang;

class StockAwalController extends Controller
{
    public function index()
    {
        $barangsRaw = \App\Models\Barang::orderBy('nama_barang', 'asc')->get();
        $barangsJson = $barangsRaw->map(function($item) {
            return [
                'id' => $item->id,
                'kode' => $item->kode_barang,
                'nama' => $item->nama_barang,
                'satuan' => $item->satuan,
                'stock' => $item->stok_awal, 
                'tanggal' => $item->created_at ? $item->created_at->format('Y-m-d') : date('Y-m-d'),
                'keterangan' => '-'
            ];
        });

        $totalBarang = $barangsRaw->count();
        $sudahDiatur = $barangsRaw->where('stok_awal', '>', 0)->count();
        $belumDiatur = $totalBarang - $sudahDiatur;
        $persentase = ($totalBarang > 0) ? ($sudahDiatur / $totalBarang) * 100 : 0;

        return view('stockAwal', [
            'barangs'     => $barangsRaw, 
            'barangsJson' => $barangsJson,
            'totalBarang' => $totalBarang,
            'sudahDiatur' => $sudahDiatur,
            'belumDiatur' => $belumDiatur,
            'persentase'  => $persentase
        ]);
    }

        public function destroy($id)
    {
        $data = StockAwal::findOrFail($id);
        $data->delete();

        return back()->with('success', 'Data berhasil dihapus!');
    }

        public function updateStock(Request $request)
    {
        $request->validate([
            'barang_id' => 'required',
            'stok_awal' => 'required|numeric|min:0',
            'satuan'    => 'required',
        ]);

        // Cari barang berdasarkan ID
        $barang = \App\Models\Barang::findOrFail($request->barang_id);

        // Update stok_awal dan stok real-time (karena ini awal tahun, keduanya disamakan)
        $barang->update([
            'stok_awal' => $request->stok_awal,
            'stok'      => $request->stok_awal,
            'satuan'    => $request->satuan,
        ]);

        return redirect()->back()->with('success', '✅ Stock awal ' . $barang->nama_barang . ' berhasil diperbarui!');
    }
}