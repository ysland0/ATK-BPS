<?php

namespace App\Http\Controllers;

use App\Models\Barang;       // Import Model Barang
use App\Models\Pengambilan;  // Import Model Pengambilan
use Illuminate\Http\Request;
use Carbon\Carbon;

class TampilanController extends Controller
{
    public function index()
    {
        // 1. Ambil barang (Limit 20 data, urutkan stok tersedikit di atas)
        // Gunakan nama class langsung tanpa \App\Models\ lagi karena sudah di-import di atas
        $barangs = Barang::orderBy('stok', 'desc')->take(20)->get();

        // 2. Hitung statistik
        $totalBarangTersedia = Barang::where('stok', '>', 0)->count();
        $totalDiambilBulanan = Pengambilan::whereMonth('created_at', Carbon::now()->month)
                                ->whereYear('created_at', Carbon::now()->year)
                                ->sum('jumlah');

        // 3. Data Grafik (6 Bulan Terakhir)
        $chartLabels = [];
        $chartData = [];
        for ($i = 5; $i >= 0; $i--) {
        $date = Carbon::now()->subMonths($i);
        $chartLabels[] = $date->translatedFormat('M');
        
        // Tambahkan (int) dan ?? 0 agar hasilnya pasti angka, bukan null
        $chartData[] = (int) Pengambilan::whereMonth('created_at', $date->month)
                        ->whereYear('created_at', $date->year)
                        ->sum('jumlah') ?? 0;
        }

        // Pastikan nama file blade kamu sesuai (misal: welcome.blade.php)
        return view('tampilan', compact('barangs', 'totalBarangTersedia', 'totalDiambilBulanan', 'chartLabels', 'chartData'));
    }
}