<?php

namespace App\Http\Controllers\Lab\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('lab.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'admin') {
              return redirect('/admin'); 
            }

            // if ($user->role === 'doctor') {
            //     return redirect()->route('doctor.dashboard');
            // }

            // if ($user->role === 'patient') {
            //     return redirect()->route('patient.dashboard');
            // }

            Auth::logout();

            return redirect()->route('login')->withErrors([
                'email' => 'Invalid user role.',
            ]);
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}