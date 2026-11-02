<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menggunakan Eloquent ORM + Eager Loading Relasi Kategori
     */
    public function index()
    {
        // Mengambil data bunga beserta relasi kategorinya
        $bunga = Bunga::with('kategori')->get();

        return view('admin.bunga.index', compact('bunga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mengambil seluruh kategori untuk pilihan dropdown di view
        $kategori = Kategori::all();
        return view('admin.bunga.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori,kategori_id',
            'nama_bunga'  => 'required|string|max:100',
            'harga'       => 'required|numeric|min:0',
            'stok'        => 'required|numeric|min:0',
            'deskripsi'   => 'nullable|string',
        ]);

        Bunga::create([
            'kategori_id' => $request->kategori_id,
            'nama_bunga'  => $request->nama_bunga,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
            'deskripsi'   => $request->deskripsi,
        ]);

        return redirect()->route('bunga.index')
            ->with('success', 'Data bunga berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bunga $bunga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataBunga = Bunga::findOrFail($id);
        $kategori  = Kategori::all(); // Untuk opsi dropdown kategori
        
        return view('admin.bunga.edit', compact('dataBunga', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategori,kategori_id',
            'nama_bunga'  => 'required|string|max:100',
            'harga'       => 'required|numeric|min:0',
            'stok'        => 'required|numeric|min:0',
            'deskripsi'   => 'nullable|string',
        ]);

        $bunga = Bunga::findOrFail($id);
        
        $bunga->update([
            'kategori_id' => $request->kategori_id,
            'nama_bunga'  => $request->nama_bunga,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
            'deskripsi'   => $request->deskripsi,
        ]);

        return redirect()->route('bunga.index')
            ->with('success', 'Data bunga berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bunga = Bunga::findOrFail($id);
        $bunga->delete();

        return redirect()->route('bunga.index')
            ->with('success', 'Data bunga berhasil dihapus!');
    }
}