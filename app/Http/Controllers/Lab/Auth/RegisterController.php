<?php

namespace App\Http\Controllers\Lab\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('lab.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['nullable', 'string', 'max:20'],
            'date_of_birth' => ['nullable', 'date'],
            'gender' => ['nullable', 'in:male,female'],
            'address' => ['nullable', 'string'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $request->full_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Patient::create([
                'user_id' => $user->id,
                'full_name' => $request->full_name,
                'phone' => $request->phone,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'address' => $request->address,
            ]);

            DB::commit();

            Auth::login($user);

            return redirect('/dashboard')->with('success', 'Patient registered successfully.');
        } catch (\Throwable $e) {
            DB::rollBack();

            return back()->withErrors([
                'register' => 'Registration failed. Please try again.',
            ])->withInput();
        }
    }
}