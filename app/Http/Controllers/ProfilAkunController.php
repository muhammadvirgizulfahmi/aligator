<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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

    public function updateProfilPengguna(Request $request)
    {
        $request->validate([
            'fotoProfil' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $user = Auth::user();
    
        // Delete the old profile picture if it exists
        if ($user->fotoProfil && Storage::exists('public/' . $user->fotoProfil)) {
            Storage::delete('public/' . $user->fotoProfil);
        }
    
        // Store the new file
        $path = $request->file('fotoProfil')->store('profile_pictures', 'public');
    
        // Update the user's profile picture in the database
        $user->update(['fotoProfil' => $path]);
    
        return redirect()->back()->with('success', 'Profile picture updated successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function profilDokter(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return a view and pass the user data
        return view('dokter.profil_dokter_anak', ['user' => $user]);
    }
    public function updateProfilDokter(Request $request)
    {
        $request->validate([
            'fotoProfil' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $user = Auth::user();
    
        // Delete the old profile picture if it exists
        if ($user->fotoProfil && Storage::exists('public/' . $user->fotoProfil)) {
            Storage::delete('public/' . $user->fotoProfil);
        }
    
        // Store the new file
        $path = $request->file('fotoProfil')->store('profile_pictures', 'public');
    
        // Update the user's profile picture in the database
        $user->update(['fotoProfil' => $path]);
    
        return redirect()->back()->with('success', 'Profile picture updated successfully.');
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
