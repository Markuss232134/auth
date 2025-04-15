<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Pieprasa Auth fasādi
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validācija
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => ['required', 'email', Rule::unique('users', 'email')],
            'password'   => ['required', 'confirmed', Password::min(6)->numbers()->letters()->symbols()],
        ]);

        // Lietotāja izveide
        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name'  => $validated['last_name'],
            'email'      => $validated['email'],
            'password'   => Hash::make($validated['password']),
        ]);

        // Lietotāja autentifikācija
        Auth::login($user); // Autentificē lietotāju pēc veiksmīgas reģistrācijas

        // Novirzām uz sākuma lapu pēc veiksmīgas reģistrācijas un autentifikācijas
        return redirect('/');
    }
}
