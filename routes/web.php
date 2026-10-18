<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BungaController;
use App\Http\Controllers\KategoriController;

// Halaman Guest
Route::get('/', function () {
    return view('guest.home');
})->name('home');

// Halaman Admin Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
Route::resource('bunga', BungaController::class);
Route::resource('kategori', KategoriController::class);