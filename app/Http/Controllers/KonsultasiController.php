<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengguna.konsulPengguna');
    }

    public function konsulDokter()
    {
        return view('dokter.konsulDokter');
    }
    public function create()
    {
        return view('pengguna.konsulCreate');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
