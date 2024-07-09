<?php

namespace App\Http\Controllers;

use App\Models\Pengalamans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PengalamansController extends Controller
{
    public function index()
    {
        $datas = Pengalamans::get();
        $title = "Data Pengalaman";
        return view('pengalamans.index', compact('datas', 'title'));
    }

    public function create()
    {
        $title = "Tambah pengalaman";
        return view('pengalamans.create', compact('title'));
    }

    public function store(Request $request)
    {
        Pengalamans::create([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir
        ]);

        return redirect()->to('admin/pengalamans')->with('message', 'Data berhasil ditambah');
    }

    public function edit(string $id)
    {
        $edit = Pengalamans::find($id);
        $title = "Edit Data " . $edit->name;
        return view('pengalamans.edit', compact('edit', 'title'));
    }

    public function update(Request $request, string $id)
    {
        Pengalamans::where('id', $id)->update([
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_akhir' => $request->tgl_akhir
        ]);

        return redirect()->to('admin/pengalamans')->with('message', 'Data berhasil ditambah');
    }

    public function destroy(string $id)
    {
        Pengalamans::where('id', $id)->delete();
        return redirect()->to('admin/pengalamans')->with('message', 'Data berhasil dihapus');
    }
}
