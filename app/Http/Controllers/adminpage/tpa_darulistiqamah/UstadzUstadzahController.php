<?php

namespace App\Http\Controllers\adminPage\tpa_darulistiqamah;

use App\Http\Controllers\Controller;
use App\Models\UstadzUstadzahTPA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UstadzUstadzahController extends Controller
{
    public function index()
    {
        $ustadz_ustadzah = UstadzUstadzahTPA::all();
        return view('component.adminPage.tpa_darulIstiqamah.ustadzUstadzah.index', compact('ustadz_ustadzah'));
    }

    public function create()
    {
        return view('component.adminPage.tpa_darulIstiqamah.ustadzUstadzah.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('ustadz_ustadzah', 'public');
        }

        UstadzUstadzahTPA::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'gambar' => $file,
        ]);

        return redirect()->route('ustadz_ustadzah-tpa_darulistiqamah-admin')->with('status', 'Data berhasil ditambah');
    }

    public function edit(Request $request, $id)
    {
        $ustadz_ustadzah = UstadzUstadzahTPA::where('id', $id)->first();
        return view('component.adminPage.tpa_darulIstiqamah.ustadzUstadzah.update', compact('ustadz_ustadzah'));
    }

    public function update(Request $request, $id)
    {
        $ustadz_ustadzah = UstadzUstadzahTPA::where('id', $id)->first();

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('ustadz_ustadzah', 'public');
            if ($ustadz_ustadzah->gambar && file_exists(storage_path('app/public/' . $ustadz_ustadzah->gambar))) {
                Storage::delete('public/' . $ustadz_ustadzah->gambar);
                $file = $request->file('gambar')->store('ustadz_ustadzah', 'public');
            }
        }

        if ($request->file('gambar') === null) {
            $file = $ustadz_ustadzah->gambar;
        }

        $ustadz_ustadzah->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'gambar' => $file,
        ]);

        return redirect()->route('ustadz_ustadzah-tpa_darulistiqamah-admin')->with('status', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $delete = UstadzUstadzahTPA::find($id);

        if ($delete->gambar && file_exists(storage_path('app/public/' . $delete->gambar))) {
            Storage::delete('public/' . $delete->gambar);
        }

        $delete->delete();

        return redirect()->route('ustadz_ustadzah-tpa_darulistiqamah-admin')->with('status', 'Data berhasil dihapus');
    }
}
