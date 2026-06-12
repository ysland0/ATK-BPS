<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengambilan; 
use App\Models\Barang;
use App\Models\Pegawai; 

class DashboardController extends Controller
{
    public function index()
    {
        $pendingRequests = Pengambilan::where('status', 'pending')
                            ->orderBy('created_at', 'desc')
                            ->get();

        $totalBarang = Barang::count();
        
        $diambilBulanIni = Pengambilan::where('status', 'approved')
                            ->whereMonth('tanggal', date('m'))
                            ->sum('jumlah');
                            
        $totalPegawai = Pegawai::count(); // Ambil dari tabel pegawais
        
        $disetujuiHariIni = Pengambilan::where('status', 'approved')
                            ->whereDate('updated_at', date('Y-m-d'))
                            ->count();

        return view('dashboardPage', compact(
            'pendingRequests', 
            'totalBarang', 
            'diambilBulanIni', 
            'totalPegawai', 
            'disetujuiHariIni'
        ));
    }
}