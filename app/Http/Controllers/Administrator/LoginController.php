<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function loginForm(){
        return view('administrator.login.index');
    } 
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role != 'admin') {
                Auth::logout();
                return back()->withErrors('You do not have admin access.');
            }

            return redirect()->intended('/');
        }
 
        return back()->withErrors('Email atau Password Salah ');
    }
  
}
