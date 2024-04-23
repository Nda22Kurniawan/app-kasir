<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $data   = array('title' => 'Halaman Login');
        return view('frontend.login.index', $data);
    }

    public function login_proses(Request $request)
    {
        $data   = ['name'      => $request->username,
                   'password'   => $request->password,
        ];

        if (Auth::attempt( $data )) {
            return redirect('dashboard');
        } else {
            Session()->put('style','danger');
            Session()->put('pesan','Username dan Password tidak sesuai');
            return redirect('');
        }
    }

    public function logout()
    {
        Auth::logout();

        Session()->put('style','success');
        Session()->put('pesan','Anda berhasil Logout');
        return redirect('');
    }
}
