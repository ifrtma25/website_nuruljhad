<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RaudhatulAthfalController extends Controller
{
    public function index()
    {
        return view('component.landpage.raudhatul_athfal.index');
    }
}
