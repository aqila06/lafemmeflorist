<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Menampilkan daftar seluruh pelanggan.
     */
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index', compact('pelanggan'));
    }

    /**
     * Menampilkan form untuk menambah pelanggan baru.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Menyimpan data pelanggan baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:100',
            'email'          => 'required|email|max:100|unique:pelanggan,email',
            'no_hp'          => 'required|string|max:20',
            'alamat'         => 'required|string',
        ]);

        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'email'          => $request->email,
            'no_hp'          => $request->no_hp,
            'alamat'         => $request->alamat,
        ]);
        return redirect()->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail spesifik pelanggan (opsional).
     */
    public function show(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Menampilkan form untuk mengedit data pelanggan.
     */
    public function edit(string $id)
    {
        $dataPelanggan = Pelanggan::findOrFail($id);

        return view('admin.pelanggan.edit', compact('dataPelanggan'));
    }

    /**
     * Memperbarui data pelanggan di database.
     */
    public function update(Request $request, string $id)
    {
        // 1. Validasi Input (mengecualikan pelanggan_id saat ini untuk pengecekan email unik)
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'email'          => 'required|email|unique:pelanggan,email,' . $id . ',pelanggan_id',
            'no_hp'          => 'required|string|max:20',
            'alamat'         => 'required|string',
        ]);

        // 2. Ambil data & lakukan update
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'email'          => $request->email,
            'no_hp'          => $request->no_hp,
            'alamat'         => $request->alamat,
        ]);

        // 3. Redirect kembali ke index dengan pesan sukses
        return redirect()->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil diperbarui!');
    }

    /**
     * Menghapus data pelanggan dari database.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil dihapus');
    }
}