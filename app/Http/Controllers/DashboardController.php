<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('component.landpage.dashboard');
    }

    public function about()
    {
        return view('component.landpage.about');
    }

    public function contact()
    {
        return view('component.landpage.contact');
    }
}
