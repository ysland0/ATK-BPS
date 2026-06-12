<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengambilanController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\StockAwalController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RincianBulananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\KartuKendaliController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\AuthController; // Tambahkan AuthController

// ==========================================================
// 1. ROUTE PUBLIK (Bisa diakses tanpa login)
// ==========================================================
Route::get('/', [TampilanController::class, 'index'])->name('tampilan');

// Route Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Form untuk Pegawai (Tetap publik agar pegawai bisa isi)
Route::get('/permohonan', [PermohonanController::class, 'indexPegawai']);
Route::post('/permohonan/store', [PermohonanController::class, 'store'])->name('permohonan.store');
Route::get('/pengambilan', [PengambilanController::class, 'create']);
Route::post('/simpan-pengambilan', [PengambilanController::class, 'store'])->name('pengambilan.store');


// ==========================================================
// 2. ROUTE TERPROTEKSI (Harus Login Admin)
// ==========================================================
Route::middleware(['auth'])->group(function () {
    
    // Proses Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/dashboardPage', [DashboardController::class, 'index'])->name('dashboardPage');

    // Data Master
    Route::resource('masterBarang', BarangController::class)->names([
        'index'   => 'barang.index',
        'store'   => 'barang.store',
        'update'  => 'barang.update',
        'destroy' => 'barang.destroy'
    ]);

    Route::prefix('masterPegawai')->group(function () {
        Route::get('/', [PegawaiController::class, 'index'])->name('pegawai.index');
        Route::post('/', [PegawaiController::class, 'store'])->name('pegawai.store');
        Route::put('/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
        Route::delete('/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
    });

    Route::prefix('masterSupplier')->group(function () {
        Route::get('/', [SupplierController::class, 'index'])->name('supplier.index');
        Route::post('/', [SupplierController::class, 'store'])->name('supplier.store');
        Route::put('/{id}', [SupplierController::class, 'update'])->name('supplier.update');
        Route::delete('/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');
    });

    // Inventaris (Pemasukan & Stock Awal)
    Route::get('/pemasukanBarang', [PemasukanController::class, 'create']);
    Route::post('/simpan-pemasukan', [PemasukanController::class, 'store']);
    Route::delete('/hapus-pemasukan/{id}', [PemasukanController::class, 'destroy']);
    Route::put('/edit-pemasukan/{id}', [PemasukanController::class, 'update']);

    Route::get('/stockAwal', [StockAwalController::class, 'index'])->name('stockAwal');
    Route::post('/import-stock-awal', [StockAwalController::class, 'importCsv'])->name('stock.import');
    Route::delete('/hapus-stockawal/{id}', [StockAwalController::class, 'destroy']);
    Route::post('/update-stock-awal', [StockAwalController::class, 'updateStock'])->name('stock.update');

    // Laporan & Kartu Kendali
    Route::get('/laporanPengambilan', [PengambilanController::class, 'index']);
    Route::delete('/hapus-pengambilan/{id}', [PengambilanController::class, 'destroy']);
    Route::post('/pengambilan/approve/{id}', [PengambilanController::class, 'approve'])->name('pengambilan.approve');
    Route::post('/pengambilan/reject/{id}', [PengambilanController::class, 'reject'])->name('pengambilan.reject');
    Route::put('/edit-pengambilan/{id}', [PengambilanController::class, 'update']);

    Route::get('/kartuKendali', [KartuKendaliController::class, 'index'])->name('kartuKendali');
    Route::get('/kartuKendali/barang/{id}', [KartuKendaliController::class, 'getBarangData'])->name('kartuKendali.barang');
    
    Route::get('/laporanRinciBulanan', [RincianBulananController::class, 'rinciBulanan'])->name('laporan.rinci');

    // Kelola Permohonan (Admin side)
    Route::get('/laporanPermohonan', [PermohonanController::class, 'indexAdmin']);
    Route::get('/permohonan/status/{id}/{status}', [PermohonanController::class, 'updateStatus'])->name('permohonan.status');
    Route::delete('/permohonan/{id}', [PermohonanController::class, 'destroy'])->name('permohonan.destroy');
    Route::put('/permohonan/{id}', [PermohonanController::class, 'update'])->name('permohonan.update');
});