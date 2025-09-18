<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ], $request->filled('remember'))) {

            $request->session()->regenerate();

            // Cek level user
            $user = Auth::user();
            if ($user->level === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->level === 'operator') {
                return redirect()->route('operator.dashboard');
            } 
        }

        // Kalau gagal login
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
