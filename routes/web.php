<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Lab\Auth\LoginController;
use App\Http\Controllers\Lab\Auth\ForgotPasswordController;
use App\Http\Controllers\Lab\Auth\ResetPasswordController;
use App\Http\Controllers\Lab\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Web Routes
Route::get('/', [HomeController::class, 'welcome'])->name('home');

Route::get('/clinics', [HomeController::class, 'clinics'])->name('clinics');

Route::get('/pharmacies', [HomeController::class, 'pharmacies'])->name('pharmacies');   

Route::get('/laboratories', [HomeController::class, 'laboratories'])->name('laboratories');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


// Password Reset Routes 

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::middleware(['auth', 'role:admin'])->group(function () {
  return redirect('/admin');
});

//admin routes
// Route::middleware('auth')->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');

//     Route::get('/admin/users', function () {
//         return view('admin.users');
//     })->name('admin.users');

// });



    // Route::get('/doctor/home', function () {
    //     return 'Doctor home placeholder';
    // })->name('doctor.home');

    // Route::get('/patient/home', function () {
    //     return 'Patient home placeholder';
    // })->name('patient.home');
 

// Route::middleware(['auth', 'role:doctor'])->group(function () {
//     Route::get('/doctor/dashboard', function () {
//         return view('doctor.dashboard');
//     })->name('doctor.dashboard');
// });

// Route::middleware(['auth', 'role:patient'])->group(function () {
//     Route::get('/patient/dashboard', function () {
//         return view('patient.dashboard');
//     })->name('patient.dashboard');
// });