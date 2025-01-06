<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\User;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        // Fetch all jadwal data with doctor (dokter) relationship, filtering users by role 'dokter'
        $jadwals = Jadwal::with(['dokter' => function ($query) {
            $query->where('role', 'dokter'); // Only include users with 'dokter' role
        }])->get();

        $user = User::findOrFail($id);
    
        return view('dokter.jadwal_dokter', compact('jadwals'), ['user' => $user]);
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
