<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RumahTahfidzController extends Controller
{
    public function index()
    {
        return view('component.landpage.rumah_tahfidz.index');
    }
}
