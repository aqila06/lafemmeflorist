<?php

use Illuminate\Support\Facades\Route;

// Halaman Guest 
Route::get('/', function () {
    return view('guest.home');
})->name('home');

// Halaman Admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');