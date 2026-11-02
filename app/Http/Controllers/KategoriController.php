<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menggunakan Query Builder DB::table() + leftJoin dengan tabel bunga
     */
    public function index()
    {
        // Query Builder dengan leftJoin ke tabel bunga untuk menghitung total item bunga per kategori
        $kategori = DB::table('kategori')
            ->leftJoin('bunga', 'kategori.kategori_id', '=', 'bunga.kategori_id')
            ->select(
                'kategori.kategori_id',
                'kategori.nama_kategori',
                'kategori.deskripsi',
                DB::raw('COUNT(bunga.bunga_id) as total_bunga')
            )
            ->groupBy('kategori.kategori_id', 'kategori.nama_kategori', 'kategori.deskripsi')
            ->get();

        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     * Menggunakan Query Builder DB::table()->insert()
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:100',
            'deskripsi'     => 'nullable|string',
        ]);

        DB::table('kategori')->insert([
            'nama_kategori' => $request->nama_kategori,
            'deskripsi'     => $request->deskripsi,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Menggunakan Query Builder DB::table()->where()->first()
     */
    public function edit(string $id)
    {
        $dataKategori = DB::table('kategori')
            ->where('kategori_id', $id)
            ->first();

        if (!$dataKategori) {
            return redirect()->route('kategori.index')->with('error', 'Data tidak ditemukan!');
        }

        return view('admin.kategori.edit', compact('dataKategori'));
    }

    /**
     * Update the specified resource in storage.
     * Menggunakan Query Builder DB::table()->where()->update()
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:100',
            'deskripsi'     => 'nullable|string',
        ]);

        DB::table('kategori')
            ->where('kategori_id', $id)
            ->update([
                'nama_kategori' => $request->nama_kategori,
                'deskripsi'     => $request->deskripsi,
                'updated_at'    => now(),
            ]);

        return redirect()->route('kategori.index')
            ->with('success', 'Kategori berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     * Menggunakan Query Builder DB::table()->where()->delete()
     */
    public function destroy(string $id)
    {
        DB::table('kategori')
            ->where('kategori_id', $id)
            ->delete();

        return redirect()->route('kategori.index')
            ->with('success', 'Data kategori berhasil dihapus!');
    }
}