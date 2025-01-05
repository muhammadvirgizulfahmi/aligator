<?php

namespace App\Http\Controllers;

use App\Models\Pembina;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembinas = Pembina::all();
        return view('admin.pembina.index', compact('pembinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembinas = Pembina::all();
        return view('admin.pembina.create', compact('pembinas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'gender' => 'required|string',
            'tgl_lahir'=> 'required|date',
            'tmp_lahir' => 'required|string',
            'keahlian' => 'required|string'
        ]);

        Pembina::create($validated);
        return redirect('dashboard/pembina');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pembinas = Pembina::find($id);
        return view('admin.pembina.show', compact('pembinas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pembinas = Pembina::find($id);
        return view('admin.pembina.edit', compact('pembinas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'gender' => 'required|string',
            'tgl_lahir'=> 'required|date',
            'tmp_lahir' => 'required|string',
            'keahlian' => 'required|string'
        ]);

        $pembinas = Pembina::find($id);
        $pembinas->update($validated);

        return redirect('dashboard/pembina')->with('pesan','data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembinas = Pembina::find($id);
        $pembinas->delete();

        return redirect('/dashboard/pembina')->with('pesan','data berhasil dihapus');
    }
}
