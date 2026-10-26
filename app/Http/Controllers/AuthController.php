<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('guest.login');
    }

    public function login(Request $request)
    {
        // Validasi inputan form
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Logika Soal 2: Jika username dan password bernilai sama persis
        if ($request->username === $request->password) {
            return redirect()->route('dashboard')->with('success', 'Selamat datang!');
        }

        // Jika username dan password berbeda
        return redirect()->back()->withInput()->with('error', 'Username dan Password salah/tidak cocok!');
    }
}