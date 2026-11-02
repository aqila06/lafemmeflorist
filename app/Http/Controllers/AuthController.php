<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('guest.login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = trim($request->input('username'));
        $password = trim($request->input('password'));

        // Logika Soal 2: Username harus sama persis dengan Password
        if ($username !== '' && $username === $password) {
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username dan Password tidak cocok!')->withInput();
    }
}