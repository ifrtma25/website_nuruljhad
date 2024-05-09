<?php

namespace App\Http\Controllers\adminPage\raudhatulathfal;

use App\Http\Controllers\Controller;
use App\Models\DaftarGuruRA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarGuruController extends Controller
{
    public function index()
    {
        $daftarguru = DaftarGuruRA::all();
        return view('component.adminPage.raudhatulAthfal.daftarGuru.index', compact('daftarguru'));
    }

    public function create()
    {
        return view('component.adminPage.raudhatulAthfal.daftarGuru.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('daftarguru', 'public');
        }

        DaftarGuruRA::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'pendidikan' => $request->input('pendidikan'),
            'gambar' => $file,
        ]);

        return redirect()->route('daftar_guru-raudhatul_athfal-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $daftarguru = DaftarGuruRA::where('id', $id)->first();
        return view('component.adminPage.raudhatulAthfal.daftarGuru.update', compact('daftarguru'));
    }

    public function update(Request $request, $id)
    {
        $daftarguru = DaftarGuruRA::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('daftarguru', 'public');
            if ($daftarguru->gambar && file_exists(storage_path('app/public/' . $daftarguru->gambar))) {
                Storage::delete('public/' . $daftarguru->gambar);
                $file = $request->file('gambar')->store('daftarguru', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $daftarguru->gambar;
        }

        $daftarguru->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'pendidikan' => $request->input('pendidikan'),
            'gambar' => $file,
        ]);

        return redirect()->route('daftar_guru-raudhatul_athfal-admin')->with('status', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $delete = DaftarGuruRA::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('daftar_guru-raudhatul_athfal-admin')->with('status', 'Data berhasil dihapus');
    }
}
