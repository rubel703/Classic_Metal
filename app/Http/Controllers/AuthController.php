<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        // dd(Hash::make('admin@gmail.com'));

        if (!empty(Auth::check())) {
            if (Auth::user()->user_type == 1) {
                return redirect('admin/dashboard');
            }
        }
        return view('admin.auth.login');
    }
    public function AuthLogin(Request $request)
    {
        //return $request;
        $remember = !empty($request->remember) ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if (Auth::user()->user_type == 1) {
                return redirect('admin/dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Ah! Please Enter Your Correct Email & Password');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/login'));
    }
}
