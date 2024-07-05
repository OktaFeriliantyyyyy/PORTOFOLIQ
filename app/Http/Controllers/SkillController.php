<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $dataSoft = Skill::where('tipe', 'soft_skill')->get();
        $dataProgramming = Skill::where('tipe', 'programming')->get();
        return view('Admin.pages.skill.index', [
            'title' => 'Skill',
            'data_softSkill' => $dataSoft,
            'data_programming' => $dataProgramming,
        ]);
    }

    public function create()
    {
        return view('Admin.pages.skill.create', [
            'title' => 'Skill',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe' => 'required',
            'skill' => 'required'
        ], [
            'tipe.required' => 'Opsi Tipe Harus Dipilih',
            'skill.required' => 'Kolom Skill Harus Diisi',
        ]);

        $data = [
            'tipe' => $request->tipe,
            'skill' => $request->skill,
        ];

        Skill::create($data);
        return redirect(route('skill.index'))->with('Sukses', 'Data Skill Berhasil Di Tambahkan');
    }

    public function edit(string $id)
    {
        $data = Skill::where('id', $id)->first();
        return view('Admin.pages.skill.edit', [
            'title' => 'Skill',
            'data' => $data
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'tipe' => 'required',
            'skill' => 'required'
        ], [
            'tipe.required' => 'Opsi Tipe Harus Dipilih',
            'skill.required' => 'Kolom Skill Harus Diisi',
        ]);

        $data = [
            'tipe' => $request->tipe,
            'skill' => $request->skill,
        ];

        Skill::where('id', $id)->update($data);
        return redirect(route('skill.index'))->with('Sukses', 'Data Skill Berhasil Di Update');
    }

    public function destroy(string $id)
    {
        Skill::where('id', $id)->delete();
        return redirect(route('skill.index'))->with('Sukses', 'Data Skill Berhasil Di Delete');
    }
}
