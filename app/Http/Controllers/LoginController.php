<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect("/")->with(["error","Anda sedang Login"]);
        } else {
            return view ("home/login");
        }
    }
    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect('/')->with(['success' => 'Login Berhasil']);
        } else {
            return redirect('/login')->with(['error'=> 'Email atau Password salah !']);
    }
}

  public function actionLogout()
  {
    Auth::logout();
    return redirect('/login');
  }
}