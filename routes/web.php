<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BungaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Models\Bunga;

// Halaman Guest
Route::get('/', function () {
    $flowers = Bunga::with('kategori')->get();
    return view('guest.home', compact('flowers'));
})->name('home');

// Halaman Admin Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
Route::resource('bunga', BungaController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('user', UserController::class);

Route::get('/register', function () {
    return view('guest.register');
})->name('register');

// Menyimpan data registrasi ke tabel pelanggan di database
Route::post('/register', function (Illuminate\Http\Request $request) {
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email',
        'username' => 'required|string|max:100',
        'password' => 'required',
    ]);

    DB::table('pelanggan')->insert([
        'nama_pelanggan' => $request->name,
        'email'          => $request->email,
        'no_hp'          => '08123456789', // default
        'alamat'         => 'jl. bata',     // default
        'created_at'     => now(),
        'updated_at'     => now(),
    ]);

    return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
})->name('register.process');

Route::get('/auth', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/auth', [AuthController::class, 'loginProcess'])->name('login.process');