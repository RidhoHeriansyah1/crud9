<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Symfony\Contracts\Service\Attribute\Required;

class LoginController extends Controller
{


    public function login()
    {
        return view('auth.login');
    }

    public function actionlogin(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
            ]
        );

        $datas = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($datas)) {
            return redirect('dashboard')->with('success', 'Berhasil Login');
        } else {
            return redirect('login')->with(
                'error',
                'Username atau Password yang dimasukkan tidak valid'
            );
        }
    }
    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ],
            [
                'name.required' => 'Nama wajib diisi',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Silahkan Masukkan Email yang valid',
                'email.unique' =>
                    'Email sudah digunakan, silahkan pilih email lain',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Password minimal 6 karakter',
            ]
        );

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('dashboard')->with('success', 'Berhasil Login');
        } else {
            return redirect('login')->with(
                'error',
                'Username atau Password yang dimasukkan tidak valid'
            );
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('success', 'Berhasil Logout');
    }


}
