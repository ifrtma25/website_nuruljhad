<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RaudhatulAthfalController extends Controller
{
    public function index()
    {
        return view('component.landPage.raudhatulAthfal.index');
    }

    public function daftar_siswa()
    {
        return view('component.landPage.raudhatulAthfal.daftarSiswa');
    }

    public function alumni()
    {
        return view('component.landPage.raudhatulAthfal.alumni');
    }

    public function daftar_guru()
    {
        return view('component.landPage.raudhatulAthfal.daftarGuru');
    }

    public function struktur()
    {
        return view('component.landpage.raudhatulAthfal.struktur');
    }
}
