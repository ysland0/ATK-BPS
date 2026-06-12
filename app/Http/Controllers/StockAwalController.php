<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB; 
use App\Models\Barang;
use App\Models\StockAwal;

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

    public function importCsv(Request $request)
    {
        $request->validate([
            'file_csv' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('file_csv');
        
        $csv = \League\Csv\Reader::createFromPath($file->getPathname(), 'r');
        $csv->setHeaderOffset(0);
        
        $records = iterator_to_array($csv->getRecords());

        if (empty($records)) {
            return back()->with('error', 'File CSV kosong!');
        }

        DB::beginTransaction();
        try {
            // Reset semua stok barang ke 0
            \App\Models\Barang::query()->update(['stok' => 0, 'stok_awal' => 0]);

            // Hapus semua riwayat pengambilan & pemasukan
            \App\Models\Pengambilan::query()->delete();
            \App\Models\Pemasukan::query()->delete();

            // Import data baru dari CSV
            foreach ($records as $row) {
                $kode     = trim($row['Kode Barang'] ?? '');
                $nama     = trim($row['Nama Barang'] ?? '');
                $satuan   = trim($row['Satuan'] ?? '');
                $stokAwal = intval($row['Saldo di Sistem'] ?? 0);

                if (empty($kode) || empty($nama)) continue;

                $barang = \App\Models\Barang::where('kode_barang', $kode)->first();

                if ($barang) {
                    $barang->update([
                        'stok'      => $stokAwal,
                        'stok_awal' => $stokAwal,
                        'satuan'    => $satuan ?: $barang->satuan,
                    ]);
                } else {
                    \App\Models\Barang::create([
                        'kode_barang' => $kode,
                        'nama_barang' => $nama,
                        'satuan'      => $satuan,
                        'stok'        => $stokAwal,
                        'stok_awal'   => $stokAwal,
                        'kategori'    => 'Lainnya',
                    ]);
                }
            }

            DB::commit();
            return back()->with('success', 'Import CSV berhasil! ' . count($records) . ' data berhasil diimport.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal import: ' . $e->getMessage());
        }
    }
}