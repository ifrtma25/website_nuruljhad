<?php

namespace App\Http\Controllers\adminPage\rumahtahfidz;

use App\Http\Controllers\Controller;
use App\Models\DaftarSantriTahfidz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarSantriController extends Controller
{
    public function index()
    {
        $daftarsantri = DaftarSantriTahfidz::orderby('nama', 'asc')->get();
        return view('component.adminPage.rumahTahfidz.daftarSantri.index', compact('daftarsantri'));
    }

    public function create()
    {
        return view('component.adminPage.rumahTahfidz.daftarSantri.create');
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
            $file = $request->file('gambar')->store('daftarsantri', 'public');
        }

        DaftarSantriTahfidz::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'gambar' => $file,
        ]);

        return redirect()->route('daftar_santri-rumah_tahfidz-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $daftarsantri = DaftarSantriTahfidz::where('id', $id)->first();
        return view('component.adminPage.rumahTahfidz.daftarSantri.update');
    }

    public function update(Request $request, $id)
    {
        $daftarsantri = DaftarSantriTahfidz::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('daftarsantri', 'public');
            if ($daftarsantri->gambar && file_exists(storage_path('app/public/', $daftarsantri->gambar))) {
                Storage::delete('public/', $daftarsantri->gambar);
                $file = $request->file('gambar')->store('daftarsantri', 'public');
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

        return redirect()->route('daftar_santri-rumah_tahfidz-admin')->with('status', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = DaftarSantriTahfidz::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/', $delete->gambar))) {
            Storage::delete('public/', $delete->gambar);
        }
    }
}
