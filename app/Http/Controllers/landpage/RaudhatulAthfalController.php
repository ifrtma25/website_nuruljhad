<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RaudhatulAthfalController extends Controller
{
    public function index()
    {
        return view('component.landPage.raudhatulAthfal.index');
    }

    public function struktur()
    {
        return view('component.landpage.raudhatulAthfal.struktur');
    }
}
