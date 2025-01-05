<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfilAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function profilPengguna(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return a view and pass the user data
        return view('pengguna.profil_pengguna', ['user' => $user]);

         // Validasi data
        //  $validated = $request->validate([
        //      'name' => 'required|string',
        //      'username' => 'required|string',
        //      'email' => 'required|string',
        //      'password' => 'nullable|string',
        //      'noTelp' => 'required|numeric',
        //      'jenisKelamin' => 'required|string',
        //      'role' => 'required|string',
        //      'fotoProfil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
    }


    /**
     * Store a newly created resource in storage.
     */
    public function profilDokter(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return a view and pass the user data
        return view('pengguna.profil_dokter_anak', ['user' => $user]);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
