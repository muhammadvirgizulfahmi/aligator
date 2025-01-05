<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori_umkms = Kategori::all();
        return view('admin.kategori.index', compact('kategori_umkms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_umkms = Kategori::all();
        return view('admin.kategori.create', compact('kategori_umkms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string'
        ]);

        Kategori::create($validated);
        return redirect('dashboard/kategori');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori_umkms = Kategori::find($id);
        return view('admin.kategori.show', compact('kategori_umkms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_umkms = Kategori::find($id);
        return view('admin.kategori.edit', compact('kategori_umkms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string'
        ]);

        $kategori_umkms = Kategori::find($id);
        $kategori_umkms->update($validated);

        return redirect('dashboard/kategori')->with('pesan','data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori_umkms = Kategori::find($id);
        $kategori_umkms->delete();

        return redirect('/dashboard/kategori')->with('pesan','data berhasil dihapus');
    }
}
