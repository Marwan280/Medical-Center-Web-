<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Lab\Auth\LoginController;
use App\Http\Controllers\Lab\Auth\ForgotPasswordController;
use App\Http\Controllers\Lab\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'welcome'])->name('home');

Route::get('/clinics', [HomeController::class, 'clinics'])->name('clinics');

Route::get('/pharmacies', [HomeController::class, 'pharmacies'])->name('pharmacies');   

Route::get('/laboratories', [HomeController::class, 'laboratories'])->name('laboratories');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [App\Http\Controllers\Lab\Auth\RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [App\Http\Controllers\Lab\Auth\RegisterController::class, 'register'])->name('register.submit');


// Password Reset Routes 
// Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');