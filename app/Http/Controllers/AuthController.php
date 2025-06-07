<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_page(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::guard('pengunjung')->attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('pengunjung.dashboard.index');
        }

        if (Auth::guard('petugas')->attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->route('petugas.dashboard.index');
        }
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
