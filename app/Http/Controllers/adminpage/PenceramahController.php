<?php

namespace App\Http\Controllers\adminPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenceramahController extends Controller
{
    public function index()
    {
        return view('component.adminpage.nurulJihad.penceramah.index');
    }
}
