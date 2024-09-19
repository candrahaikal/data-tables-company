<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http; // Import Http
use RealRashid\SweetAlert\Facades\Alert; // Import Alert
use App\Models\User;

class AuthController extends Controller
{
    function postSignUp(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'confirm-password' => 'required|min:6|same:password'
        ]);


        $passwordCrypt = bcrypt($validated['password']);

        $createMember = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $passwordCrypt,
            'access_group_id' => 2,
            'type' => 'partner', // Tambahkan ini jika ingin menetapkan role
            'created_id' => 0,
            'updated_id' => 0,
            'status' => 1,
        ]);

        if ($createMember) {
            // Login user setelah registrasi
            Auth::login($createMember);

            // Mengatur redirect
            $redirect = $request->input('redirect', '/');
            return redirect($redirect);
        } else {
            return redirect()->back()->withErrors(['message' => 'Registration failed.']);
        }
    }

    public function postSignIn(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba autentikasi
        if (Auth::attempt($credentials)) {
            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            // Redirect sesuai role
            $user = Auth::user();
            if ($user->type === 'admin') {
                return redirect()->route('index');
            } elseif ($user->type === 'partner') {
                return redirect()->route('index');
            }

            return redirect()->route('index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    function logout(Request $request)
    {
        Auth::logout();

        // Hapus session pengguna
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman yang diinginkan setelah logout
        return redirect()->route('login'); // Ganti dengan route yang sesuai
    }
}
