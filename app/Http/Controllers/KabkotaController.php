<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use Illuminate\Http\Request;
use App\Models\Provinsi;

class KabkotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kabkotas = Kabkota::all();
        return view('admin.kabkota.index', compact('kabkotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinsis = Provinsi::all();
        return view('admin.kabkota.create', compact('provinsis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'latitude' => 'required|string',
            'longtitude'=> 'required|string',
            'provinsi_id' => 'required|integer|min:1'
        ]);

        Kabkota::create($validated);
        return redirect('dashboard/kabkota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kabkotas = Kabkota::find($id);
        return view('admin.kabkota.show', compact('kabkotas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kabkotas = Kabkota::find($id);
        $provinsis = Provinsi::all();
        return view('admin.kabkota.edit', compact('kabkotas', 'provinsis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'latitude' => 'required|string',
            'longtitude'=> 'required|string',
            'provinsi_id' => 'required|integer|min:1'
        ]);

        $kabkotas = Kabkota::find($id);
        $kabkotas->update($validated);

        return redirect('dashboard/kabkota')->with('pesan','data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kabkotas = Kabkota::find($id);
        $kabkotas->delete();

        return redirect('/dashboard/kabkota')->with('pesan','data berhasil dihapus');
    }
}
