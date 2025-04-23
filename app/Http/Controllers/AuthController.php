<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function loginForm()
    {
        return view('auth.login'); // Pastikan file auth/login.blade.php ada
    }

    // Proses login
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard'); // Ke halaman admin
        }
        return redirect('/'); // Ke halaman utama kalau bukan admin
    }

    return back()->with('error', 'Email atau password salah');
}

    

    // Proses logout
    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/')->with('success', 'Anda telah logout.');
}

}
