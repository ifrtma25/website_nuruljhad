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

    public function daftar_santri()
    {
        return view('component.landPage.tpa_DarulIstiqamah.daftarSantri');
    }

    public function ustadz_ustadzah()
    {
        return view('component.landPage.tpa_DarulIstiqamah.ustadzUstadzah');
    }

    public function wisudawan()
    {
        return view('component.landPage.tpa_DarulIstiqamah.wisudawan');
    }
}
