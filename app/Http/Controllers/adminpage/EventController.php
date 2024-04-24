<?php

namespace App\Http\Controllers\adminPage;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('component.adminPage.nurulJihad.event.index', compact('event'));
    }

    public function create()
    {
        return view('component.adminPage.nurulJihad.event.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'tema' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('event', 'public');
        }

        Event::create([
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'tema' => $request->input('tema'),
            'tanggal' => $request->input('tanggal'),
            'gambar' => $file,
        ]);

        return redirect()->route('event.nuruljihad.admin')->with('status', 'Data berhasil ditambah');
    }
}
