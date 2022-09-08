<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
class Authenticate extends Controller
{
    public function login()
    {
        return view('home.login');
    }

    public function login_post(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

         Session::flash('error','Geçersiz kullanıcı adı veya şifre.');
         return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('logout','Çıkış Yapıldı');
        return redirect()->route('login');
    }
}
