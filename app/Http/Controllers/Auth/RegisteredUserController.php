<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->intended('/');
    }

    public function redirectBasedOnRole(Request $request)
    {
        $role = $request->input('role');

        if ($role === 'pengguna') {
            return redirect()->route('register.pengguna');
        } elseif ($role === 'dokter') {
            return redirect()->route('register.dokter');
        }

        return back()->withErrors(['role' => 'Please select a valid role.']);
    }

    public function createPengguna()
    {
        return view('pengguna.regisPengguna');
    }

    public function storePengguna(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'username' => 'required|string',
            'noTelp' => 'required|numeric',
            'jenisKelamin' => 'required|string'
            // Add additional validation for pengguna if needed
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'noTelp' => $request->noTelp,
            'jenisKelamin' => $request->jenisKelamin,
            'role' => 'pengguna',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/'); // Adjust as needed
    }

    public function createDokter()
    {
        return view('dokter.regisDokter');
    }

    public function storeDokter(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'username' => 'required|string',
            'noTelp' => 'required|numeric',
            'jenisKelamin' => 'required|string',
            'alamat' => 'required|string|max:255',
            'fotoSertifikat' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
            // Add additional validation for dokter if needed
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
            'noTelp' => $request->noTelp,
            'jenisKelamin' => $request->jenisKelamin,
            'role' => 'dokter',
            'alamat' => $request->alamat,
            'fotoSertifikat' => $request->fotoSertifikat
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/'); // Adjust as needed
    }
}
