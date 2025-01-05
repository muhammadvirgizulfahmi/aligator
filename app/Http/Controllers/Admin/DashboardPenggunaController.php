<?php

namespace App\Http\Controllers\Admin;

use app\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class DashboardPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view("admin.pengguna.dashboard");

        // Fetch all users from the database
        $user = User::all();
        
        // Return the view
        return view('admin.pengguna.dashboard', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create()
     {
         return view("admin.pengguna.create");
     }
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'noTelp' => 'required|numeric',
            'jenisKelamin' => 'required|string',
            'role' => 'required|string',
            'fotoProfil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Handle file upload for the photo
        if ($request->hasFile('fotoProfil')) {
            $path = $request->file('fotoProfil')->store('profile_photos', 'public');
            $validated['fotoProfil'] = $path;
        } else {
            $validated['fotoProfil'] = 'default.jpg'; // Nilai default
        }        

        // Hash the password
        $validated['password'] = Hash::make($request->password);


        // Create a new user with the validated data
        User::create($validated);

        // Redirect to the user list page
        return redirect()->route('pengguna.dashboard')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return a view and pass the user data
        return view('admin.pengguna.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return a view for editing the user
        return view('admin.pengguna.edit', compact('user'));
    }

    /**
     * Update the specified user in the database.
     */
    public function update(Request $request, string $id)
    {
        // Cari pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'nullable|string',
            'noTelp' => 'required|numeric',
            'jenisKelamin' => 'required|string',
            'role' => 'required|string',
            'fotoProfil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Hash the password
        $validated['password'] = Hash::make($request->password);

        
        // Handle file upload for the photo
        if ($request->hasFile('fotoProfil')) {
            $path = $request->file('fotoProfil')->store('profile_photos', 'public');
            $validated['fotoProfil'] = $path;
        } else {
            $validated['fotoProfil'] = 'default.jpg'; // Nilai default
        }
        
        // Update data pengguna
        $user->update($validated);

        // Redirect ke dashboard pengguna setelah update
        return redirect()->route('pengguna.dashboard', $user->id)->with('success', 'User updated successfully.');
    }


    /**
     * Remove the specified user from the database.
     */
    public function destroy(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user from the database
        $user->delete();

        // Redirect to the user list page
        return redirect()->route('pengguna.dashboard')->with('success', 'User deleted successfully.');
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