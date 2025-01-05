<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinsis = Provinsi::all();
        return view('admin.provinsi.index', compact('provinsis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'ibukota' => 'required|string',
            'latitude' => 'required|string',
            'longtitude'=> 'required|string'
        ]);

        Provinsi::create($validated);
        return redirect('dashboard/provinsi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $provinsis = Provinsi::find($id);
        return view('admin.provinsi.show', compact('provinsis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provinsis = Provinsi::find($id);
        return view('admin.provinsi.edit', compact('provinsis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'ibukota' => 'required|string',
            'latitude' => 'required|string',
            'longtitude'=> 'required|string'
        ]);

        $provinsis = Provinsi::find($id);
        $provinsis->update($validated);

        return redirect('dashboard/provinsi')->with('pesan','data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $provinsis = Provinsi::find($id);
        $provinsis->delete();

        return redirect('/dashboard/provinsi')->with('pesan','data berhasil dihapus');
    }
}
