<?php

namespace App\Http\Controllers;

use App\Models\MetaData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        return view('Admin.pages.profile.index', [
            'title' => 'Profile'
        ]);
    }

    public function update(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            '_foto' => 'nullable|mimes:jpeg,jpg,png,jfif',
            '_nama' => 'required',
            '_aboutMe' => 'required',
            '_facebook' => 'required',
            '_instagram' => 'required',
            '_youtube' => 'required',
            '_github' => 'required',
            '_whatsapp' => 'nullable', // WhatsApp menjadi nullable
            '_email' => 'nullable|email', // Email menjadi nullable
            '_resume' => 'nullable', // Resume menjadi nullable
            'badgeText' => 'nullable',
            'headerSubtitle' => 'nullable',
            'headerTitle' => 'nullable',
        ], [
            '_foto.mimes' => 'Foto yang dimasukkan hanya boleh berekstensi JPEG, JPG, PNG, dan JFIF',
            '_email.email' => 'Format email tidak valid',
        ]);

        // Mengembalikan pesan error jika validasi gagal
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan data profil
        MetaData::updateOrCreate(['meta_key' => '_nama'], ['meta_value' => $request->_nama]);
        MetaData::updateOrCreate(['meta_key' => '_aboutMe'], ['meta_value' => $request->_aboutMe]);
        MetaData::updateOrCreate(['meta_key' => '_facebook'], ['meta_value' => $request->_facebook]);
        MetaData::updateOrCreate(['meta_key' => '_instagram'], ['meta_value' => $request->_instagram]);
        MetaData::updateOrCreate(['meta_key' => '_youtube'], ['meta_value' => $request->_youtube]);
        MetaData::updateOrCreate(['meta_key' => '_github'], ['meta_value' => $request->_github]);
        if ($request->filled('_whatsapp')) {
            MetaData::updateOrCreate(['meta_key' => '_whatsapp'], ['meta_value' => $request->_whatsapp]);
        }
        if ($request->filled('_email')) {
            MetaData::updateOrCreate(['meta_key' => '_email'], ['meta_value' => $request->_email]);
        }
        if ($request->filled('_resume')) {
            MetaData::updateOrCreate(['meta_key' => '_resume'], ['meta_value' => $request->_resume]);
        }

        // Simpan data header jika diisi
        if ($request->filled('badgeText')) {
            MetaData::updateOrCreate(['meta_key' => 'badgeText'], ['meta_value' => $request->badgeText]);
        }
        if ($request->filled('headerSubtitle')) {
            MetaData::updateOrCreate(['meta_key' => 'headerSubtitle'], ['meta_value' => $request->headerSubtitle]);
        }
        if ($request->filled('headerTitle')) {
            MetaData::updateOrCreate(['meta_key' => 'headerTitle'], ['meta_value' => $request->headerTitle]);
        }

        // Simpan foto jika diunggah
        if ($request->hasFile('_foto')) {
            $foto_file = $request->file('_foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_baru = date('ymdhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('foto/profile'), $foto_baru);

            $foto_lama = getMetaValue('_foto');
            File::delete(public_path('foto/profile') . "/" . $foto_lama);

            MetaData::updateOrCreate(['meta_key' => '_foto'], ['meta_value' => $foto_baru]);
        }

        return redirect(route('profile.index'))->with('success', 'Data berhasil ditambahkan/diperbarui');
    }
}
