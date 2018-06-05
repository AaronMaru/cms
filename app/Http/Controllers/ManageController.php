<?php

namespace App\Http\Controllers;

class ManageController extends Controller
{
    public function dashboard()
    {
        return view('manage.dashboard');
    }
}
