<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RumahTahfidzController extends Controller
{
    public function index()
    {
        return view('component.landPage.rumahTahfidz.index');
    }

    public function program()
    {
        return view('component.landPage.rumahTahfidz.program');
    }

    public function daftar_santri()
    {
        return view('component.landPage.rumahTahfidz.daftarSantri');
    }

    public function jadwal()
    {
        return view('component.landPage.rumahTahfidz.jadwal');
    }

    public function struktur()
    {
        return view('component.landPage.rumahTahfidz.struktur');
    }
}
