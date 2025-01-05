<?php

namespace App\Http\Controllers\Admin;

use App\Models\Parameter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DashboardParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view("admin.pengguna.dashboard");

        // Fetch all users from the database
        $parameter = Parameter::all();
        
        // Return the view
        return view('admin.parameter.dashboard', compact('parameter'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create()
     {
         return view("admin.parameter.create");
     }
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'umur' => 'required|numeric',
            'tinggiBadan' => 'required|numeric',
            'beratBadan' => 'required|numeric',
            'lingkarKepala' => 'required|numeric'
        ]);
    

        // Create a new user with the validated data
        Parameter::create($validated);

        // Redirect to the user list page
        return redirect()->route('parameter.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the user by ID
        $parameter = Parameter::findOrFail($id);

        // Return a view and pass the user data
        return view('admin.parameter.show', ['parameter' => $parameter]);
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(string $id)
    {
        // Find the user by ID
        $parameter = Parameter::findOrFail($id);

        // Return a view for editing the user
        return view('admin.parameter.edit', compact('parameter'));
    }

    /**
     * Update the specified user in the database.
     */
    public function update(Request $request, string $id)
    {
        // Cari pengguna berdasarkan ID
        $parameter = Parameter::findOrFail($id);

        // Validasi data
        $validated = $request->validate([
            'umur' => 'required|numeric',
            'tinggiBadan' => 'required|numeric',
            'beratBadan' => 'required|numeric',
            'lingkarKepala' => 'required|numeric'
        ]);
        
        // Update data pengguna
        $parameter->update($validated);

        // Redirect ke dashboard pengguna setelah update
        return redirect()->route('parameter.dashboard', $parameter->id)->with('success', 'User updated successfully.');
    }


    /**
     * Remove the specified user from the database.
     */
    public function destroy(string $id)
    {
        // Find the user by ID
        $parameter = Parameter::findOrFail($id);

        // Delete the user from the database
        $parameter->delete();

        // Redirect to the user list page
        return redirect()->route('parameter.dashboard');
    }
}