<?php

namespace App\Http\Controllers\Admin;

use app\Models\Dokter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class DashboardDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view("admin.pengguna.dashboard");

        // Fetch all users from the database
        $dokters = Dokter::all();
        
        // Return the view
        return view('admin.dokter.dashboard', compact('dokters'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create()
     {
         return view("pengguna.data_anak_create");
     }

     public function edit()
     {
        return view("pengguna.data_anak_edit");
     }
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

// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Kelurahan;

// class KelurahanController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $kelurahans = Kelurahan::all();
//         return view('admin.kelurahan.index', compact('kelurahans'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         return view('admin.kelurahan.create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         // validasi form input
//         $validated = $request->validate([
//             'nama' => 'required|string',
//             'nama_kecamatan' => 'required|string'
//         ]);

//         Kelurahan::create($validated);
//         return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil ditambahkan');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         $kelurahan = Kelurahan::find($id);
//         return view('admin.kelurahan.show', compact('kelurahan'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         $kelurahan = Kelurahan::find($id);
//         return view('admin.kelurahan.edit', compact('kelurahan'));
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         $validated = $request->validate([
//             'nama' => 'required|string',
//             'nama_kecamatan' => 'required|string'
//         ]);

//         $kelurahan = Kelurahan::find($id);
//         $kelurahan->update($validated);
//         // Kelurahan::create($id);
//         return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil diperbarui');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         $kelurahan = Kelurahan::find($id);
//         $kelurahan->delete();

//         return redirect('dashboard/kelurahan')->with('pesan', 'Data Berhasil diperbarui');
//     }
// }