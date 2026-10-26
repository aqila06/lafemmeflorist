<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BungaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::resource('user', UserController::class);

// Route Guest
Route::get('/', function () {
    return view('guest.home');
})->name('home');

Route::get('/auth', [AuthController::class, 'showLogin'])->name('login');
Route::post('/auth', [AuthController::class, 'login'])->name('login.process');

Route::get('/register', function () {
    return view('guest.register');
})->name('register');

Route::post('/register', function () {
    return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login!');
})->name('register.process');

Route::get('/dashboard', function () {
    return "<h1>Selamat Datang di Halaman Dashboard Admin!</h1>";
})->name('dashboard');