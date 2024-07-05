<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    private $tipe;
    public function __construct()
    {
        $this->tipe = 'pengalaman';
    }

    public function index()
    {
        $data = Riwayat::where('tipe', $this->tipe)->orderBy('tgl_akhir', 'asc')->get();
        return view('Admin.pages.pengalaman.index', [
            'data' => $data,
            'title' => 'Pengalaman'
        ]);
    }

    public function create()
    {
        return view('Admin.pages.pengalaman.create', [
            'title' => 'Pengalaman'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'info1' => 'required',
            'info2' => 'required',
            'tgl_mulai' => 'required',
        ], [
            'judul.required' => 'Posisi Wajib Diisi',
            'info1.required' => 'Perusahaan Wajib Diisi',
            'info2.required' => 'Alamat Wajib Diisi',
            'tgl_mulai.required' => 'Tanggal Mulai Wajib Diisi',
        ]);

            $data = [
                'judul' => $request->judul,
                'tipe' => $this->tipe,
                'info1' => $request->info1,
                'info2' => $request->info2,
                'isi' => $request->isi,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_akhir' => $request->tgl_akhir,
            ];
            Riwayat::create($data);
            return redirect(route('pengalaman.index'))
            ->with('Sukses', 'Data Pengalaman Berhasil Ditambahkan');
    }

    public function edit(string $id)
    {
        $data = Riwayat::where('id', $id)->where('tipe', $this->tipe)->first();
        return view('Admin.pages.pengalaman.edit', [
            'data' => $data,
            'title' => 'Pengalaman'
        ]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'info1' => 'required',
            'info2' => 'required',
            'tgl_mulai' => 'required',
        ], [
            'judul.required' => 'Posisi Wajib Diisi',
            'info1.required' => 'Perusahaan Wajib Diisi',
            'info2.required' => 'Alamat Wajib Diisi',
            'tgl_mulai.required' => 'Tanggal Mulai Wajib Diisi',
        ]);

            $data = [
                'judul' => $request->judul,
                'info1' => $request->info1,
                'info2' => $request->info2,
                'isi' => $request->isi,
                'tgl_mulai' => $request->tgl_mulai,
                'tgl_akhir' => $request->tgl_akhir,
            ];
            Riwayat::where('id', $id)->where('tipe', $this->tipe)->update($data);
            return redirect(route('pengalaman.index'))
            ->with('Sukses', 'Data Pengalaman Berhasil Di Update');
    }

    public function destroy(string $id)
    {
        Riwayat::where('id', $id)->where('tipe', $this->tipe)->delete();
        return redirect(route('pengalaman.index'))->with('Sukses', 'Data Pengalaman Berhasil Di Hapus');
    }
}
