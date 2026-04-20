<?php

namespace App\Http\Controllers\Lab\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PatientRegisterRequest;
use App\Services\Auth\PatientRegistrationService;
use Illuminate\Support\Facades\Auth;
use Throwable;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('lab.auth.register');
    }

    public function register(
        PatientRegisterRequest $request,
        PatientRegistrationService $patientRegistrationService
    )
    {
        try {
            $result = $patientRegistrationService->register($request->validated());

            Auth::login($result['user']);

            return redirect()->route('home')->with('success', 'Patient registered successfully.');
        } catch (Throwable $e) {
            report($e);

            return back()->withErrors([
                'register' => 'Registration failed. Please try again.',
            ])->withInput();
        }
    }
}