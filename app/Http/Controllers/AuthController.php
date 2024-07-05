<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('Admin.login');
    }

    public function Login(Request $request) {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ], [
            'email.required' => 'Kolom Email Wajib Diisi',
            'password.required' => 'Kolom Password Wajib Diisi',
        ]);

        $info_login = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if (Auth::attempt($info_login)) {
            // Session::put('login_on', true);
            return redirect(route('pendidikan.index'))->with('Sukses', 'Berhasil Login!');
        } else {
            return redirect(route('login.index'))->withErrors('Email Atau Password Yang Anda Masukan Tidak Valid');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect(route('login.index'))->with('Sukses','Berhasil Logout');
    }
}
