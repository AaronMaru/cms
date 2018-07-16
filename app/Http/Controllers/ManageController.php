<?php

namespace App\Http\Controllers;

use LaraFlash;

class ManageController extends Controller
{
    public function dashboard()
    {
        LaraFlash::success('Hello world');
        return view('manage.dashboard');
    }
}
