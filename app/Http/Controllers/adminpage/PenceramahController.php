<?php

namespace App\Http\Controllers\adminPage;

use App\Http\Controllers\Controller;
use App\Models\Penceramah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenceramahController extends Controller
{
    public function index()
    {
        $penceramah = Penceramah::orderby('nama', 'asc')->get();
        return view('component.adminpage.nurulJihad.penceramah.index', compact('penceramah'));
    }

    public function create()
    {
        return view('component.adminpage.nurulJihad.penceramah.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('penceramah', 'public');
        }

        Penceramah::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'gambar' => $file,
        ]);

        return redirect()->route('penceramah.nuruljihad.admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $penceramah = Penceramah::where('id', $id)->first();
        return view('component.adminpage.nurulJihad.penceramah.update', compact('penceramah'));
    }

    public function update(Request $request, $id)
    {
        $penceramah = Penceramah::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('penceramah', 'public');
            if ($penceramah->gambar && file_exists(storage_path('app/public' . $penceramah->gambar))) {
                Storage::delete('public/' . $penceramah->gambar);
                $file = $request->file('gambar')->store('penceramah', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $penceramah->gambar;
        }

        $penceramah->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'gambar' => $file,
        ]);

        return redirect()->route('penceramah.nuruljihad.admin')->with('status', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = Penceramah::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('penceramah.nuruljihad.admin')->with('status', 'Data berhasil dihapus');
    }
}
