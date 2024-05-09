<?php

namespace App\Http\Controllers\adminPage\majelistaklim;

use App\Http\Controllers\Controller;
use App\Models\KeanggotaanMajelisTaklim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KeanggotaanController extends Controller
{
    public function index()
    {
        $keanggotaan = KeanggotaanMajelisTaklim::all();
        return view('component.adminPage.majelisTaklim.keanggotaan.index', compact('keanggotaan'));
    }

    public function create()
    {
        return view('component.adminPage.majelisTaklim.keanggotaan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('keanggotaanmajelistaklim', 'public');
        }

        KeanggotaanMajelisTaklim::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'gambar' => $file,
        ]);

        return redirect()->route('keanggotaan-majelis_taklim-admin')->with('status', 'Berhasil tambah data');
    }

    public function edit(Request $request, $id)
    {
        $keanggotaan = KeanggotaanMajelisTaklim::where('id', $id)->first();
        return view('component.adminPage.majelisTaklim.keanggotaan.update', compact('keanggotaan'));
    }

    public function update(Request $request, $id)
    {
        $keanggotaan = KeanggotaanMajelisTaklim::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('keanggotaanmajelistaklim', 'public');
            if ($keanggotaan->gambar && file_exists(storage_path('app/public/' . $keanggotaan->gambar))) {
                Storage::delete('public/' . $keanggotaan->gambar);
                $file = $request->file('gambar')->store('keanggotaanmajelistaklim', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $keanggotaan->gambar;
        }

        $keanggotaan->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'gambar' => $file,
        ]);

        return redirect()->route('keanggotaan-majelis_taklim-admin')->with('status', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = KeanggotaanMajelisTaklim::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('keanggotaan-majelis_taklim-admin')->with('status', 'Data berhasil dihapus');
    }
}
