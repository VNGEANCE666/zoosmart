<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_page(){
        return view('auth.login');
    }
    
    public function register_page(){
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('petugas')->attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('petugas.dashboard.index');
        }// Jika login gagal
return back()->withErrors([
    'login' => 'Login gagal. Username atau password salah.',
])->withInput();

    }

    public function logout(Request $request)
    {
        Auth::guard('pengunjung')->logout();
        Auth::guard('pembeli')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login-page');
    }
}
