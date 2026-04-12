<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class Plogincontroller extends Controller
{
    public function PatientForgetPass(): View
    {
        return view('PforgetPassPage');
    }
    public function PatientRememberPass(): View
    {
        return view('PloginPage');
    }
}