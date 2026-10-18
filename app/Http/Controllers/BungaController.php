<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use Illuminate\Http\Request;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bunga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bunga' => 'required|string|max:100',
            'harga'      => 'required|numeric|min:0',
            'stok'       => 'required|numeric|min:0',
            'deskripsi'  => 'nullable|string',
        ]);

        Bunga::create([
            'nama_bunga' => $request->nama_bunga,
            'harga'      => $request->harga,
            'stok'       => $request->stok,
            'deskripsi'  => $request->deskripsi,
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
    public function edit(Bunga $bunga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bunga $bunga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bunga $bunga)
    {
        //
    }
}
