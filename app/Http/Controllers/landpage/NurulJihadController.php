<?php

namespace App\Http\Controllers\landpage;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Kajian;
use App\Models\Penceramah;
use App\Models\StrukturMasjid;
use Illuminate\Http\Request;

class NurulJihadController extends Controller
{
    public function index()
    {
        return view('component.landPage.nurulJihad.index');
    }

    public function kajian()
    {
        // $kajian = Kajian::latest()->take(3)->get();
        $kajian = Kajian::orderby('tanggal', 'desc')->take(6)->get();
        return view('component.landPage.nurulJihad.kajian', compact('kajian'));
    }

    public function penceramah()
    {
        $penceramah = Penceramah::orderby('nama', 'asc')->get();
        return view('component.landPage.nurulJihad.penceramah', compact('penceramah'));
    }

    public function struktur()
    {
        $struktur = StrukturMasjid::all();
        $pimpinan = StrukturMasjid::where('jabatan', 'Pimpinan')->get();
        return view('component.landPage.nurulJihad.struktur', compact('struktur', 'pimpinan'));
    }

    public function event()
    {
        $event = Event::orderby('tanggal', 'desc')->take(6)->get();
        return view('component.landPage.nurulJihad.event', compact('event'));
    }
}
