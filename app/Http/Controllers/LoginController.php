<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index()
    {
        return view("main/login/index");
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nik' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role != 'employee') {
                Auth::logout();
                return back()->withErrors('You do not have access.');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors('NIK atau Password Salah ');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $emailDomain = substr(strrchr($user->getEmail(), "@"), 1);
        if ($emailDomain == 'students.amikom.ac.id' || $emailDomain == 'amikom.ac.id') {

            $cekuser = User::where('email', $user->email)->first();

            if (!$cekuser) {
                $newuser = new User([
                    'google_id' => $user->getId(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'image' => null
                ]);
                $newuser->save();
                $cekuser = $newuser;
            }

            Auth::login($cekuser, true);
            return to_route('home');
        }

        return to_route('login')->withErrors(['Gunakan email amikom untuk login di aplikasi ini.']);
    }
}
