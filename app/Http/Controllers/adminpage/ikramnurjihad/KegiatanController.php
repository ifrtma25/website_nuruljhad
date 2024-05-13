<?php

namespace App\Http\Controllers\adminpage\ikramnurjihad;

use App\Http\Controllers\Controller;
use App\Models\KegiatanIkramnurjihad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatan = KegiatanIkramnurjihad::all();
        return view('component.adminPage.ikramnurJihad.kegiatan.index', compact('kegiatan'));
    }

    public function create()
    {
        return view('component.adminPage.ikramnurJihad.kegiatan.create');
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
            $file = $request->file('gambar')->store('kegiatanikramnurjihad', 'public');
        }

        KegiatanIkramnurjihad::create([
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'tema' => $request->input('tema'),
            'tanggal' => $request->input('tanggal'),
            'gambar' => $file,
        ]);

        return redirect()->route('kegiatan-ikramnurjihad-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $kegiatan = KegiatanIkramnurjihad::where('id', $id)->first();
        return view('component.adminPage.ikramnurJihad.kegiatan.update', compact('kegiatan'));
    }

    public function update(Request $request, $id)
    {
        $kegiatan = KegiatanIkramnurjihad::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('kegiatanikramnurjihad', 'public');
            if ($kegiatan->gambar && file_exists(storage_path('app/public/' . $kegiatan->gambar))) {
                Storage::delete('public/' . $kegiatan->gambar);
                $file = $request->file('gamabr')->store('kegaitanikramnurjihad', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $kegiatan->gambar;
        }

        $kegiatan->update([
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'tema' => $request->input('tema'),
            'tanggal' => $request->input('tanggal'),
            'gambar' => $file,
        ]);

        return redirect()->route('kegiatan-ikramnurjihad-admin')->with('status', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $delete = KegiatanIkramnurjihad::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('kegiatan-ikramnurjihad-admin')->with('status', 'Data berhasil dihapus');
    }
}
