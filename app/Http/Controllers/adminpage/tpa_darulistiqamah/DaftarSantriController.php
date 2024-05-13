<?php

namespace App\Http\Controllers\adminPage\tpa_darulistiqamah;

use App\Http\Controllers\Controller;
use App\Models\DaftarSantriTPA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarSantriController extends Controller
{
    public function index()
    {
        $daftarsantri = DaftarSantriTPA::orderby('nama', 'asc')->get();
        return view('component.adminPage.tpa_darulIstiqamah.daftarSantri.index', compact('daftarsantri'));
    }

    public function create()
    {
        return view('component.adminPage.tpa_darulIstiqamah.daftarSantri.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('daftarsantri_tpa', 'public');
        }

        DaftarSantriTPA::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'gambar' => $file,
        ]);

        return redirect()->route('daftar_santri-tpa_darulistiqamah-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $daftarsantri = DaftarSantriTPA::where('id', $id)->first();
        return view('component.adminPage.tpa_darulIstiqamah.daftarSantri.update', compact('daftarsantri'));
    }

    public function update(Request $request, $id)
    {
        $daftarsantri = DaftarSantriTPA::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('daftarsantri_tpa', 'public');
            if ($daftarsantri->gambar && file_exists(storage_path('app/public/' . $daftarsantri->gambar))) {
                Storage::delete('public/' . $daftarsantri->gambar);
                $file = $request->file('gambar')->store('daftarsantri_tpa', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $daftarsantri->gambar;
        }

        $daftarsantri->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'gambar' => $file,
        ]);

        return redirect()->route('daftar_santri-tpa_darulistiqamah-admin')->with('status', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = DaftarSantriTPA::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('daftar_santri-tpa_darulistiqamah-admin')->with('status', 'Data berhasil dihapus');
    }
}
