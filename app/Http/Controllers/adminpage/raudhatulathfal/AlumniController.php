<?php

namespace App\Http\Controllers\adminPage\raudhatulathfal;

use App\Http\Controllers\Controller;
use App\Models\AlumniRA;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = AlumniRA::all();
        return view('component.adminPage.raudhatulAthfal.alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('component.adminPage.raudhatulAthfal.alumni.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tahun_lulus' => 'required',
        ]);

        AlumniRA::create([
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tahun_lulus' => $request->input('tahun_lulus'),
        ]);

        return redirect()->route('alumni-raudhatul_athfal-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $alumni = AlumniRA::where('id', $id)->first();
        return view('component.adminPage.raudhatulAthfal.alumni.update', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        $alumni = AlumniRA::where('id', $id)->first();

        $alumni->update([
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tahun_lulus' => $request->input('tahun_lulus'),
        ]);

        return redirect()->route('alumni-raudhatul_athfal-admin')->with('status', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $delete = AlumniRA::find($id);

        $delete->delete();

        return redirect()->route('alumni-raudhatul_athfal-admin')->with('status', 'Data berhasil dihapus');
    }
}
