<?php

namespace App\Http\Controllers\landPage;

use App\Http\Controllers\Controller;
use App\Models\KegiatanIkramnurjihad;
use App\Models\StrukturIkramnurjihad;
use Illuminate\Http\Request;

class IkramnurjihadController extends Controller
{
    public function index()
    {
        return view('component.landpage.ikramnurjihad.index');
    }

    public function struktur()
    {
        $struktur = StrukturIkramnurjihad::all();
        return view('component.landpage.ikramnurjihad.struktur', compact('struktur'));
    }

    public function kajian()
    {
        return view('component.landPage.ikramnurjihad.index');
    }

    public function kegiatan()
    {
        $kegiatan = KegiatanIkramnurjihad::orderby('tanggal', 'desc')->get();
        return view('component.landPage.ikramnurjihad.kegiatan', compact('kegiatan'));
    }
}
