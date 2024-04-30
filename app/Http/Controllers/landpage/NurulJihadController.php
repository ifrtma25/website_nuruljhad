<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use App\Models\KajianMasjid;
use App\Models\KajianNuruljihad;
use App\Models\Kegiatan;
use App\Models\KegiatanNuruljihad;
use App\Models\Penceramah;
use App\Models\StrukturMasjid;
use App\Models\StrukturNuruljihad;
use Illuminate\Http\Request;

class NurulJihadController extends Controller
{
    public function index()
    {
        return view('component.landPage.nurulJihad.index');
    }

    public function kajian()
    {
        // $kajiannuruljihad = KajianNuruljihad::latest()->take(3)->get();
        $kajiannuruljihad = KajianNuruljihad::orderby('tanggal', 'desc')->take(6)->get();
        return view('component.landPage.nurulJihad.kajian', compact('kajiannuruljihad'));
    }

    public function penceramah()
    {
        $penceramah = Penceramah::orderby('nama', 'asc')->get();
        return view('component.landPage.nurulJihad.penceramah', compact('penceramah'));
    }

    public function struktur()
    {
        $strukturnuruljihad = StrukturNuruljihad::all();
        $pimpinan = StrukturNuruljihad::where('jabatan', 'Pimpinan')->get();
        return view('component.landPage.nurulJihad.struktur', compact('strukturnuruljihad', 'pimpinan'));
    }

    public function kegiatan()
    {
        $kegiatannuruljihad = KegiatanNuruljihad::orderby('tanggal', 'desc')->take(6)->get();
        return view('component.landPage.nurulJihad.kegiatan', compact('kegiatannuruljihad'));
    }

    public function kontak()
    {
        // $kegiatan = Kegiatan::orderby('tanggal', 'desc')->take(6)->get();
        return view('component.landpage.nuruljihad.kontak');
    }
}
