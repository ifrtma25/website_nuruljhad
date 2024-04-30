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

    public function kajian()
    {
        return view('component.landPage.ikramnurjihad.index');
    }

    public function kegiatan()
    {
        return view('component.landPage.ikramnurjihad.kegiatan');
    }
}
