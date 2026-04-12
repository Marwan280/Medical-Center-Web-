<?php

use App\Http\Middleware\EnsurePatientChangedInitialPassword;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'patient.password' => EnsurePatientChangedInitialPassword::class,
        ]);

        // Unauthenticated users hitting auth:patient routes go to patient login.
        $middleware->redirectGuestsTo(fn () => route('patient.login'));
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
