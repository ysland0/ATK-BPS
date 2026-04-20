<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengambilanController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\StockAwalController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;

Route::get('/', [PengambilanController::class, 'create'])->name('pengambilan.create');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/landingPage', function () {
    return view('landingPage');
})->name('landingPage');

Route::get('/dashboardPage', function () {
    return view('dashboardPage');
})->name('dashboardPage');

Route::resource('masterBarang', BarangController::class)->names([
    'index' => 'barang.index',
    'store' => 'barang.store',
    'destroy' => 'barang.destroy'
]);

Route::get('/masterPegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::post('/masterPegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::put('/masterPegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
Route::delete('/masterPegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

Route::get('/masterSupplier', [SupplierController::class, 'index'])->name('supplier.index');
Route::post('/masterSupplier', [SupplierController::class, 'store'])->name('supplier.store');
Route::put('/masterSupplier/{id}', [SupplierController::class, 'update'])->name('supplier.update');
Route::delete('/masterSupplier/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');

Route::get('/pemasukanBarang', [PemasukanController::class, 'create']);
Route::post('/simpan-pemasukan', [PemasukanController::class, 'store']);
Route::delete('/hapus-pemasukan/{id}', [PemasukanController::class, 'destroy']);

Route::get('/laporanPengambilan', [PengambilanController::class, 'index']);
Route::post('/simpan-pengambilan', [PengambilanController::class, 'store'])->name('pengambilan.store');
Route::delete('/hapus-pengambilan/{id}', [PengambilanController::class, 'destroy']);

Route::get('/stockAwal', [StockAwalController::class, 'index'])->name('stockAwal');
Route::delete('/hapus-stockawal/{id}', [StockAwalController::class, 'destroy']);
Route::post('/update-stock-awal', [App\Http\Controllers\StockAwalController::class, 'updateStock'])->name('stock.update');


Route::get('/kartuKendali', function () {
    return view('kartuKendali');
})->name('kartuKendali');

Route::get('/laporanRinciBulanan', function () {
    return view('laporanRinciBulanan');
})->name('laporanRinciBulanan');
