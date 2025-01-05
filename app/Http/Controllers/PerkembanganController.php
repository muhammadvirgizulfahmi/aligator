<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perkembangan;
use App\Models\Anak;

class PerkembanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create(string $id)
    {
        $anak = Anak::findOrFail($id);
        return view("pengguna.perkembangan_create", compact("anak"));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'id_anak' => 'required|exists:anak,id', // Ensure id_anak exists in the anak table
            'umur' => 'required|integer',
            'tinggiBadan' => 'required|numeric',
            'beratBadan' => 'required|numeric',
            'lingkarKepala' => 'required|numeric',
        ]);

        // Create a new perkembangan record
        Perkembangan::create($validated);

        // Redirect to the data_anak_edit page with the id_anak
        // Redirect to the data_anak_edit page with the id_anak
        return redirect()->route('anak.edit', ['id' => $validated['id_anak']])
        ->with('success', 'Data perkembangan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(string $id)
    {
        // Fetch the perkembangan record by ID
        $perkembangan = Perkembangan::find($id);

        $anak = Anak::find($perkembangan->id_anak);

        // Check if the record exists
        if (!$perkembangan) {
            return redirect()->route('perkembangan.index')->with('error', 'Data perkembangan not found.');
        }

        // Pass the data to the view
        return view('pengguna.perkembangan_edit', compact('perkembangan', 'anak'));
    }
    public function update(Request $request, string $id)
    {
        $perkembangan = Perkembangan::find($id);
        $anak = $perkembangan->anak;

        // Validate the incoming data
        $validatedData = $request->validate([
        'umur' => 'required|integer',
        'tinggiBadan' => 'required|numeric',
        'beratBadan' => 'required|numeric',
        'lingkarKepala' => 'required|numeric',
        ]);

        // Find the perkembangan record
        $perkembangan = Perkembangan::findOrFail($id);

        // Update the record
        $perkembangan->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('anak.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the user by ID
        $perkembangan = Perkembangan::findOrFail($id);

        // Delete the user from the database
        $perkembangan->delete();

        // Redirect to the previous page (anak edit page)
        return redirect()->route('anak.edit', ['id' => $perkembangan->id_anak])->with('success', 'Perkembangan deleted successfully');
    }
}
