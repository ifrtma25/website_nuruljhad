<?php

namespace App\Http\Controllers\landPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TPADarulIstiqamahCcontroller extends Controller
{
    public function index()
    {
        return view('component.landPage.tpa_DarulIstiqamah.index');
    }
}
