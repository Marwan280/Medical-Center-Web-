<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function welcome(): View
    {
        return view('WelcomePage');
    }

    public function clinics(): View
    {
        return view('clinicsPage');
    }

    public function pharmacies(): View
    {
        return view('pharmacyPage');
    }

    public function laboratories(): View
    {
        return view('userSelectionPage');
    }
}
