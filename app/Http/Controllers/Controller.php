<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    //
    //

    public function index()
    {
        return view('admin.dashboard');
    }
}
