<?php

namespace App\Http\Controllers\landPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IkramnurjihadController extends Controller
{
    public function index()
    {
        return view('component.landPage.ikramnurjihad.index');
    }
}
