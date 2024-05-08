<?php

namespace App\Http\Controllers\landPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajelisTaklimController extends Controller
{
    public function index()
    {
        return view('component.landPage.majelisTaklim.index');
    }

    public function kajian()
    {
        return view('component.landPage.majelisTaklim.kajian');
    }

    public function keanggotaan()
    {
        return view('component.landPage.majelisTaklim.keanggotaan');
    }
}
