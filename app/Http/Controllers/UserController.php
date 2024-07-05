<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use App\Models\Riwayat;
use App\Models\Skill;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        return view('TampilanUser.index', [
            'title' => 'Home'
        ]);
    }

    public function resume() {
        $pengalaman = Riwayat::where('tipe', 'pengalaman')->get();
        $pendidikan = Riwayat::where('tipe', 'pendidikan')->get();

        $softSkill = Skill::where('tipe', 'soft_skill')->get();
        $programmingSkill = Skill::where('tipe', 'programming')->get();

        return view('TampilanUser.resume', [
            'title' => 'Resume',
            'pengalaman' => $pengalaman,
            'pendidikan' => $pendidikan,
            'softSkill' => $softSkill,
            'programmingSkill' => $programmingSkill,
        ]);
    }

    public function project(){
        $postinganTerbaru = Postingan::latest()->first();
        if ($postinganTerbaru) {
            $postinganDst = Postingan::where('id', '!=', $postinganTerbaru->id)->orderBy('id', 'desc')->get();
        } else {
            $postinganDst = "";
        }

        return view('TampilanUser.projek', [
            'title' => 'Project',
            'postinganTerbaru' => $postinganTerbaru,
            'postinganDst' => $postinganDst,
        ]);
    }
}
