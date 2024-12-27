<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.admin.login');  // Menampilkan form login
    }

    public function login(Request $request)
    {
        // Validasi data input
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba login dengan guard 'admin'
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate(); // Regenerasi session untuk keamanan tambahan
            return redirect()->route('admin.dashboard')
                             ->with('success', 'Selamat datang, Anda berhasil login.');
        }

        // Kembali dengan error jika login gagal
        return back()->withErrors([
            'login_error' => 'Username atau password salah.', // Error lebih deskriptif
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout(); // Logout dari guard 'admin'
        
        $request->session()->invalidate(); // Invalidasi session
        $request->session()->regenerateToken(); // Regenerasi CSRF token untuk keamanan tambahan

        return redirect()->route('admin.login')
                         ->with('success', 'Anda berhasil logout.');
    }
}
