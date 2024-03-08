<?php

namespace App\Http\Controllers\adminpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('component.adminpage.dashboard');
    }
}
