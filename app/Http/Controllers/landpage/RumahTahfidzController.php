<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RumahTahfidzController extends Controller
{
    public function index()
    {
        return view('component.landPage.rumah_tahfidz.index');
    }
}
