<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function index()
    {
        $data = Postingan::orderBy('id', 'desc')->get();
        return view('Admin.pages.postingan.index', [
            'title' => 'Postingan',
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('Admin.pages.postingan.create', [
            'title' => 'Postingan'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|mimes:png,jpg,jpeg,jfif',
            'judul' => 'required',
            'link' => 'required',
            'isi' => 'required',
        ], [
            'gambar.required' => 'Gambar Harus Diisi',
            'gambar.mimes' => 'Ekstensi Gambar Harus PNG, JPG, JPEG Dan JFIF',
            'judul.required' => 'Judul Harus Diisi',
            'link.required' => 'Link Harus Diisi',
            'isi.required' => 'Isian Isi Harus Diisi',
        ]);

        $foto_file = $request->file('gambar');
        $foto_ekstensi = $foto_file->extension();
        $foto_rename = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto/postingan'), $foto_rename);

        $data = [
            'gambar' => $foto_rename,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'link' => $request->link
        ];

        Postingan::create($data);
        return redirect(route('postingan.index'))->with('Sukses', 'Postingan Berhasil Ditambahkan');
    }

    public function edit(string $id)
    {
        $data = Postingan::where('id', $id)->first();
        return view('Admin.pages.postingan.edit', [
            'title' => 'Postingan',
            'data' => $data
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'mimes:png,jpg,jpeg,jfif',
            'judul' => 'required',
            'link' => 'required',
            'isi' => 'required',
        ], [
            'gambar.mimes' => 'Ekstensi Gambar Harus PNG, JPG, JPEG Dan JFIF',
            'judul.required' => 'Judul Harus Diisi',
            'link.required' => 'Link Harus Diisi',
            'isi.required' => 'Isian Isi Harus Diisi',
        ]);

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'link' => $request->link
        ];

        if ($request->has('gambar')) {
            $foto_file = $request->file('gambar');
            $foto_ekstensi = $foto_file->extension();
            $foto_rename = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto/postingan'), $foto_rename);

            $foto_lama = Postingan::where('id', $id)->first();
            File::delete(public_path('foto/postingan'). "/" .$foto_lama->gambar);

            $data['gambar'] = $foto_rename;
        }
        Postingan::where('id', $id)->update($data);
        return redirect(route('postingan.index'))->with('Sukses', 'Postingan Berhasil Di Update');
    }

    public function destroy(string $id)
    {
        $nama_foto = Postingan::where('id', $id)->first();
        File::delete(public_path('foto/postingan'). "/" .$nama_foto->gambar);

        Postingan::find($id)->delete();
        return redirect(route('postingan.index'))->with('Sukses', 'Postingan Berhasil Di Hapus');
    }
}
