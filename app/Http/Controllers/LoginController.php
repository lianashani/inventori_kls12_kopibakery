<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect("/")
                ->with('error', 'Anda sedang login');
        }
        return view("home/login");
    }

    public function actionLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // cek apakah user wajib ganti password
            if ($user->must_change_password) {
                return redirect('/change-password')
                    ->with('info', 'Silakan ganti password sebelum melanjutkan.');
            }

            return redirect('/')->with('success', 'Login Berhasil');
        }

        return redirect('/login')->with('error', 'Email atau Password salah!');
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
