<?php

namespace App\Http\Controllers;

use App\Models\Pendidikans;
use Illuminate\Http\Request;

class PendidikansController extends Controller
{
    public function index()
    {
        $datas = Pendidikans::get();
        $title = "Data Pendidikan";
        return view('pendidikans.index', compact('datas', 'title'));
    }

    public function create()
    {
        $title = "Tambah pendidikan";
        return view('pendidikans.create', compact('title'));
    }

    public function store(Request $request)
    {
        Pendidikans::create([
            'nama_univ' => $request->nama_univ,
            'lulusan' => $request->lulusan,
            'jurusan' => $request->jurusan,
            'gpa' => $request->gpa,
            'tgl_lulus' => $request->tgl_lulus,
            'description' => $request->description
        ]);

        return redirect()->to('admin/pendidikans')->with('message', 'Data berhasil ditambah');
    }

    public function edit(string $id)
    {
        $edit = Pendidikans::find($id);
        $title = "Edit Data " . $edit->name;
        return view('pendidikans.edit', compact('edit', 'title'));
    }

    public function update(Request $request, string $id)
    {
        Pendidikans::where('id', $id)->update([
            'nama_univ' => $request->nama_univ,
            'lulusan' => $request->lulusan,
            'jurusan' => $request->jurusan,
            'gpa' => $request->gpa,
            'tgl_lulus' => $request->tgl_lulus,
            'description' => $request->description
        ]);

        return redirect()->to('admin/pendidikans')->with('message', 'Data berhasil ditambah');
    }

    public function destroy(string $id)
    {
        Pendidikans::where('id', $id)->delete();
        return redirect()->to('admin/pendidikans')->with('message', 'Data berhasil dihapus');
    }
}
