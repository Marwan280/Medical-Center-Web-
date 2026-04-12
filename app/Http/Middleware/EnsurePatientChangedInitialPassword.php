<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * If the patient must change password on first login, restrict access to
 * password change routes (and logout) until completed.
 */
class EnsurePatientChangedInitialPassword
{
    public function handle(Request $request, Closure $next): Response
    {
        $patient = $request->user('patient');

        if ($patient && $patient->must_change_password) {
            $allowed = $request->routeIs('patient.password.*')
                || $request->routeIs('patient.logout');

            if (! $allowed) {
                return redirect()->route('patient.password.first-change');
            }
        }

        return $next($request);
    }
}
