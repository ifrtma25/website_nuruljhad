<?php

namespace App\Http\Controllers\landPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IkramnurjihadController extends Controller
{
    public function index()
    {
        return view('component.landpage.ikramnurjihad.index');
    }

    public function struktur()
    {
        return view('component.landpage.ikramnurjihad.struktur');
    }
}
