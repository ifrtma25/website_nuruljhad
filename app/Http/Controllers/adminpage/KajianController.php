<?php

namespace App\Http\Controllers\adminPage;

use App\Http\Controllers\Controller;
use App\Models\Kajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KajianController extends Controller
{
    public function index()
    {
        $kajian = Kajian::orderby('tanggal', 'desc')->get();
        return view('component.adminPage.nurulJihad.kajian.index', compact('kajian'));
    }

    public function create()
    {
        return view('component.adminPage.nurulJihad.kajian.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_penceramah' => 'required',
            'tema' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('kajian', 'public');
        }

        Kajian::create([
            'nama_penceramah' => $request->input('nama_penceramah'),
            'tema' => $request->input('tema'),
            'tanggal' => $request->input('tanggal'),
            'gambar' => $file,
        ]);

        return redirect()->route('kajian.nuruljihad.admin')->with('status', 'Data Berhasil');
    }

    public function edit(Request $request, $id)
    {
        $kajian = Kajian::where('id', $id)->first();
        return view('component.adminPage.nurulJihad.kajian.update', compact('kajian'));
    }

    public function update(Request $request, $id)
    {
        $kajian = Kajian::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('kajian', 'public');
            if ($kajian->gambar && file_exists(storage_path('app/public/' . $kajian->gambar))) {
                Storage::delete('public/' . $kajian->gambar);
                $file = $request->file('gambar')->store('kajian', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $kajian->gambar;
        }

        $kajian->update([
            'nama_penceramah' => $request->input('nama_penceramah'),
            'tema' => $request->input('tema'),
            'tanggal' => $request->input('tanggal'),
            'gambar' => $file,
        ]);

        return redirect()->route('kajian.nuruljihad.admin')->with('status', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = Kajian::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('kajian.nuruljihad.admin')->with('status', 'Data berahsil dihapus');
    }
}
