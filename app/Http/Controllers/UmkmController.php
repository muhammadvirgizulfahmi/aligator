<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\Kabkota;
use App\Models\Kategori;
use App\Models\Pembina;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $umkms = Umkm::all();
        return view('admin.umkm.index', compact('umkms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kabkotas = Kabkota::all();
        $kategori_umkms = Kategori::all();
        $pembinas = Pembina::all();
        return view('admin.umkm.create', compact('kabkotas','kategori_umkms','pembinas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'modal' => 'required|integer',
            'pemilik' => 'required|string',
            'alamat'=> 'required|string',
            'website' => 'required|string',
            'email' => 'required|string',
            'rating' => 'required|integer',
            'kabkota_id' => 'required|integer',
            'kategori_umkm_id' => 'required|integer',
            'pembina_id' => 'required|integer'
        ]);

        Umkm::create($validated);
        return redirect('dashboard/umkm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $umkms = Umkm::find($id);
        return view('admin.umkm.show', compact('umkms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $umkms = Umkm::find($id);
        $kabkotas = Kabkota::all();
        $kategori_umkms = Kategori::all();
        $pembinas = Pembina::all();
        return view('admin.umkm.edit', compact('umkms','kabkotas','kategori_umkms','pembinas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'modal' => 'required|integer',
            'pemilik' => 'required|string',
            'alamat'=> 'required|string',
            'website' => 'required|string',
            'email' => 'required|string',
            'rating' => 'required|integer',
            'kabkota_id' => 'required|integer',
            'kategori_umkm_id' => 'required|integer',
            'pembina_id' => 'required|integer'
        ]);

        $umkms = Umkm::find($id);
        $umkms->update($validated);

        return redirect('dashboard/umkm')->with('pesan','data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $umkms = Umkm::find($id);
        $umkms->delete();

        return redirect('/dashboard/umkm')->with('pesan','data berhasil dihapus');
    }
}
