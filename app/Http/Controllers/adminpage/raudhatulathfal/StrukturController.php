<?php

namespace App\Http\Controllers\adminPage\raudhatulathfal;

use App\Http\Controllers\Controller;
use App\Models\StrukturRA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturController extends Controller
{
    public function index()
    {
        $struktur = StrukturRA::all();
        return view('component.adminPage.raudhatulAthfal.struktur.index', compact('struktur'));
    }

    public function create()
    {
        return view('component.adminPage.raudhatulAthfal.struktur.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('struktur_ra', 'public');
        }

        StrukturRA::create([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'gambar' => $file,
        ]);

        return redirect()->route('struktur-raudhatul_athfal-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $struktur = StrukturRA::where('id', $id)->first();
        return view('component.adminPage.raudhatulAthfal.struktur.update', compact('struktur'));
    }

    public function update(Request $request, $id)
    {
        $struktur = StrukturRA::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('struktur_ra', 'public');
            if ($struktur->gambar && file_exists(storage_path('app/public/' . $struktur->gambar))) {
                Storage::delete('public/' . $struktur->gambar);
                $file = $request->file('gambar')->store('struktur_ra', 'public');
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

        return redirect()->route('struktur-raudhatul_athfal-admin')->with('status', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $delete = StrukturRA::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('struktur-raudhatul_athfal-admin')->with('status', 'Data berhasil dihapus');
    }
}
