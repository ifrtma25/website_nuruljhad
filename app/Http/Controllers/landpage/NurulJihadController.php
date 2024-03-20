<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NurulJihadController extends Controller
{
    public function index()
    {
        return view('component.landPage.nurulJihad.index');
    }

    public function kajian()
    {
        return view('component.landPage.nurulJihad.kajian');
    }

    public function struktur()
    {
        return view('component.landPage.nurulJihad.struktur');
    }

    public function program()
    {
        return view('component.landPage.nurulJihad.program');
    }
}
