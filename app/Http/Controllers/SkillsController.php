<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Skills::get();
        // $datas = Skills::find(0);
        $title = "Data Skills";
        return view('skills.index', compact('datas', 'title'));
    }

    public function create()
    {
        $title = "Tambah skills";
        return view('skills.create', compact('title'));
    }

    public function store(Request $request)
    {
        Skills::create([
            'nama_skills' => $request->nama_skills,
            'persen' => $request->persen
        ]);
        return redirect()->to('admin/skills')->with('message', 'Data berhasil ditambah');
    }

    public function edit(string $id)
    {
        $edit = Skills::find($id);
        $title = "Edit Data " . $edit->name;
        return view('skills.edit', compact('edit', 'title'));
    }

    public function update(Request $request, string $id)
    {
        Skills::where('id', $id)->update([
            'nama_skills' => $request->nama_skills,
            'persen' => $request->persen
        ]);

        return redirect()->to('admin/skills')->with('message', 'Data berhasil ditambah');
    }

    public function destroy(string $id)
    {
        Skills::where('id', $id)->delete();
        return redirect()->to('admin/skills')->with('message', 'Data berhasil dihapus');
    }
}
