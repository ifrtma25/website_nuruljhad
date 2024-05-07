<?php

namespace App\Http\Controllers\adminPage\rumahtahfidz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return view('component.adminPage.rumahTahfidz.program.index');
    }
}
