<?php

namespace App\Http\Controllers\Lab\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    // Show the forgot password form
    public function showLinkRequestForm()
    {
        return view('lab.auth.forgotPassword');
    }

    // Handle sending reset link
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // Send reset link to email
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Return response
        return $status === Password::RESET_LINK_SENT
            ? back()->with('success', __($status))
            : back()->withErrors(['email' => __($status)]);
    }
}