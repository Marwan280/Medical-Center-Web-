<?php

namespace App\Http\Controllers\Lab\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show login page
    public function showLogin()
    {
        return view('lab.auth.login'); // resources/views/lab/auth/login.blade.php
    }

    // Handle login
    public function login(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // Remember checkbox
        $remember = $request->boolean('remember');

        // Attempt login
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate(); // 🔐 prevents session fixation

            return redirect()->intended('/dashboard');
        }

        // Failed login
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate(); // 🔐 destroy session
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}