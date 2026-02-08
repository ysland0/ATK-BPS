<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pengambilan');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/landingPage', function () {
    return view('landingPage');
})->name('landingPage');

Route::get('/dashboardPage', function () {
    return view('dashboardPage');
})->name('dashboardPage');

Route::get('/masterBarang', function () {
    return view('masterBarang');
})->name('masterBarang');

Route::get('/masterPegawai', function () {
    return view('masterPegawai');
})->name('masterPegawai');

Route::get('/masterSupplier', function () {
    return view('masterSupplier');
})->name('masterSupplier');

Route::get('/pemasukanBarang', function () {
    return view('PemasukanBarang');
})->name('pemasukanBarang');