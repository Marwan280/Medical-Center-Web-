<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class userSelectionController extends Controller
{
    public function PatientLogin(): View
    {
        return view('PloginPage');
    }
}
