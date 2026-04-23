<?php

namespace App\Http\Controllers\Lab\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('lab.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        $remember = $request->boolean('remember');
        $loginValue = trim($validated['login']);
        $password = $validated['password'];

        $loginField = filter_var($loginValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_number';

        $user = User::query()->where($loginField, $loginValue)->first();

        if (! $user || ! Hash::check($password, $user->password)) {
            return back()->withErrors([
                'login' => 'Invalid email/phone number or password.',
            ])->onlyInput('login');
        }

        if (! $user->is_active || $user->status !== 'active') {
            return back()->withErrors([
                'login' => 'Your account is not active. Please contact support.',
            ])->onlyInput('login');
        }

        Auth::login($user, $remember);
        $request->session()->regenerate();
        $user->forceFill(['last_login_at' => now()])->save();

        // TODO: In future, redirect users with must_change_password=true to password change flow.
        return match ($user->role) {
            'admin' => redirect()->route('filament.admin.pages.dashboard'),
            'doctor' => redirect()->route('doctor.dashboard'),
            'patient' => redirect()->route('patient.dashboard'),
            default => (function () {
                Auth::logout();
                return redirect()->route('login')->withErrors([
                    'login' => 'Invalid email/phone number or password.',
                ]);
            })(),
        };
    }

    public function logout(\Illuminate\Http\Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}