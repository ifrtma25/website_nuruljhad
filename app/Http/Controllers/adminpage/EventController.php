<?php

namespace App\Http\Controllers\adminPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('component.adminPage.nurulJihad.event.index');
    }
}
