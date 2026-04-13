<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\userSelectionController;
use App\Http\Controllers\Plogincontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'welcome'])->name('home');

Route::get('/clinics', [HomeController::class, 'clinics'])->name('clinics');

Route::get('/pharmacies', [HomeController::class, 'pharmacies'])->name('pharmacies');   

Route::get('/laboratories', [HomeController::class, 'laboratories'])->name('laboratories');

Route::get('/patient', [userSelectionController::class, 'PatientLogin'])->name('patient');

Route::get('/patient/forget-pass', [Plogincontroller::class, 'PatientForgetPass'])->name('patient.forget-pass');

Route::get('/patient/remember-pass', [Plogincontroller::class, 'PatientRememberPass'])->name('patient.remember-pass');