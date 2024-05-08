<?php

namespace App\Http\Controllers\adminPage\rumahtahfidz;

use App\Http\Controllers\Controller;
use App\Models\ProgramTahfidz;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $program = ProgramTahfidz::all();
        return view('component.adminPage.rumahTahfidz.program.index', compact('program'));
    }

    public function create()
    {
        return view('component.adminPage.rumahTahfidz.program.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_program' => 'required',
        ]);

        ProgramTahfidz::create([
            'nama_program' => $request->input('nama_program'),
        ]);

        return redirect()->route('program-rumah_tahfidz-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $program = ProgramTahfidz::where('id', $id)->first();
        return view('component.adminPage.rumahTahfidz.program.update', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $program = ProgramTahfidz::where('id', $id)->first();

        $program->update([
            'nama_program' => $request->input('nama_program'),
        ]);

        return redirect()->route('program-rumah_tahfidz-admin')->with('status', 'Data berasil diupdate');
    }

    public function delete($id)
    {
        $delete = ProgramTahfidz::find($id);

        $delete->delete();

        return redirect()->route('program-rumah_tahfidz-admin')->with('status', 'Data berhasil dihapus');
    }
}
