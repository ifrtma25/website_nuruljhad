<?php

namespace App\Http\Controllers\adminPage\tpa_darulistiqamah;

use App\Http\Controllers\Controller;
use App\Models\WisudawanTPA;
use Illuminate\Http\Request;

class WisudawanController extends Controller
{
    public function index()
    {
        $wisudawan = WisudawanTPA::orderby('tahun_wisuda', 'desc')->get();
        return view('component.adminPage.tpa_darulIstiqamah.wisudawan.index', compact('wisudawan'));
    }

    public function create()
    {
        return view('component.adminPage.tpa_darulIstiqamah.wisudawan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tahun_wisuda' => 'required',
        ]);

        WisudawanTPA::create([
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tahun_wisuda' => $request->input('tahun_wisuda'),
        ]);

        return redirect()->route('wisudawan-tpa_darulistiqamah-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $wisudawan = WisudawanTPA::where('id', $id)->first();
        return view('component.adminPage.tpa_darulIstiqamah.wisudawan.update', compact('wisudawan'));
    }

    public function update(Request $request, $id)
    {
        $wisudawan = WisudawanTPA::where('id', $id)->first();

        $wisudawan->update([
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tahun_wisuda' => $request->input('tahun_wisuda'),
        ]);

        return redirect()->route('wisudawan-tpa_darulistiqamah-admin')->with('status', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $delete = WisudawanTPA::find($id);

        $delete->delete();

        return redirect()->route('wisudawan-tpa_darulistiqamah-admin')->with('status', 'Data berhasil dihapus');
    }
}
