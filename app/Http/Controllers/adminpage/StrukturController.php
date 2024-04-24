<?php

namespace App\Http\Controllers\adminPage;

use App\Http\Controllers\Controller;
use App\Models\StrukturMasjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    public function index()
    {
        $struktur = StrukturMasjid::all();
        return view('component.adminPage.nurulJihad.struktur.index', compact('struktur'));
    }

    public function create()
    {
        return view('component.adminPage.nurulJihad.struktur.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('strukturMasjid', 'public');
        }

        StrukturMasjid::create([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'gambar' => $file,
        ]);

        return redirect()->route('struktur.nuruljihad.admin')->with('status', 'Berhasil tambah data');
    }

    public function edit(Request $request, $id)
    {
        $struktur = StrukturMasjid::where('id', $id)->first();
        return view('component.adminPage.nurulJihad.struktur.update', compact('struktur'));
    }

    public function update(Request $request, $id)
    {
        $struktur = StrukturMasjid::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('struktur', 'public');
            if ($struktur->gambar && file_exists(storage_path('app/public/' . $struktur->gambar))) {
                Storage::delete('public/' . $struktur->gambar);
                $file = $request->file('gambar')->store('struktur', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $struktur->gambar;
        }

        $struktur->update([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'gambar' => $file,
        ]);

        return redirect()->route('struktur.nuruljihad.admin')->with('status', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = StrukturMasjid::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('struktur.nuruljihad.admin')->with('status', 'Data berhasil dihapus');
    }
}