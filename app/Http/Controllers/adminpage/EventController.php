<?php

namespace App\Http\Controllers\adminPage;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::orderby('tanggal', 'desc')->get();
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

    public function edit(Request $request, $id)
    {
        $event = Event::where('id', $id)->first();
        return view('component.adminpage.nurulJihad.event.update', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('event', 'public');
            if ($event->gambar && file_exists(storage_path('app/public/' . $event->gambar))) {
                Storage::delete('public/' . $event->gambar);
                $file = $request->file('gambar')->store('event', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $event->gambar;
        }

        $event->update([
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'tema' => $request->input('tema'),
            'tanggal' => $request->input('tanggal'),
            'gambar' => $file,
        ]);

        return redirect()->route('event.nuruljihad.admin')->with('status', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $delete = Event::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('event.nuruljihad.admin')->with('status', 'Data berhasil dihapus');
    }
}
