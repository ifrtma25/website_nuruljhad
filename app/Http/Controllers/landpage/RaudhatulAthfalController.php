<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RaudhatulAthfalController extends Controller
{
    public function index()
    {
        return view('component.landPage.raudhatul_athfal.index');
    }
}
