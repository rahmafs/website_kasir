<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            // Jika ADMIN
            if ($user->role === 'admin') {
                return redirect()->route('dashboard'); // dashboard admin
            }

            // Jika KASIR
            if ($user->role === 'kasir') {
                return redirect()->route('dashboard_kasir'); // dashboard kasir
            }

            // Jika role tidak dikenal
            Auth::logout();
            return back()->withErrors(['loginError' => 'Role tidak dikenali!']);
        }

        return back()->withErrors([
            'loginError' => 'Email atau password salah!'
        ]);
    }
}
