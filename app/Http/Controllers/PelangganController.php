<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index', compact('pelanggan'));
    }

    // Menampilkan form tambah pelanggan
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    // Menyimpan data pelanggan baru
    public function store(Request $request)
    {
        // 1. Validasi Input Form
        $request->validate([
            'nama_pelanggan' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:pelanggan,email',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
        ]);

        // 2. Simpan Data ke Database
        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        // 3. Kembali ke Halaman Index
        return redirect()->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil ditambahkan!');
    }

    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataPelanggan = Pelanggan::findOrFail($id);

        return view('admin.pelanggan.edit', compact('dataPelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // 1. Validation
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggan,email,' . $id . ',pelanggan_id',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'required|string',
        ]);

        // 2. Ambil data & lakukan update
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        // 3. Redirect & Success Flash Data
        return redirect()->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil dihapus!');
    }
}