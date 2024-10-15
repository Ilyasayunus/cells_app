<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Coba login menggunakan kredensial yang diberikan
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke halaman dashboard atau intended page
            return redirect()->intended('/dashboard')->with('success', 'Login berhasil!');
        }

        // Jika login gagal, redirect kembali dengan pesan error
        return back()->with('error', 'Email atau password salah!');
    }
}
