<?php

namespace App\Http\Controllers\adminPage\raudhatulathfal;

use App\Http\Controllers\Controller;
use App\Models\DaftarSiswaRA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarSiswaController extends Controller
{
    public function index()
    {
        $daftarsiswa = DaftarSiswaRA::all();
        return view('component.adminPage.raudhatulAthfal.daftarSiswa.index', compact('daftarsiswa'));
    }

    public function create()
    {
        return view('component.adminPage.raudhatulAthfal.daftarSiswa.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('daftarsiswa', 'public');
        }

        DaftarSiswaRA::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'gambar' => $file,
        ]);

        return redirect()->route('daftar_siswa-raudhatul_athfal-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $daftarsiswa = DaftarSiswaRA::where('id', $id)->first();
        return view('component.adminPage.raudhatulAthfal.daftarSiswa.update', compact('daftarsiswa'));
    }

    public function update(Request $request, $id)
    {
        $daftarsiswa = DaftarSiswaRA::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('daftarsiswa', 'public');
            if ($daftarsiswa->gambar && file_exists(storage_path('app/public/' . $daftarsiswa->gambar))) {
                Storage::delete('public/' . $daftarsiswa->gambar);
                $file = $request->file('gambar')->store('daftarsiswa', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $daftarsiswa->gambar;
        }

        $daftarsiswa->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'gambar' => $file,
        ]);

        return redirect()->route('daftar_siswa-raudhatul_athfal-admin')->with('status', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = DaftarSiswaRA::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('daftar_siswa-raudhatul_athfal-admin')->with('status', 'Data berhasil dihapus');
    }
}
