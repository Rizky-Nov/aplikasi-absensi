<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function register()
    {
        return view('login.sign-up');
    }

    public function loginAct(Request $request)
    {
        $credit = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        $nama = Str::beforeLast( $request->email, '@');
        // dd(Auth::attempt($credit));
        
        if ($user->profile->nama_lengkap == null) {
            if(Auth::attempt($credit)){
                return redirect("/profile/$user->id")->with('berhasil', 'Selamat Datang' . $nama);
            }
        } else {
            if(Auth::attempt($credit)){
                return redirect('/home')->with('berhasil', 'Selamat Datang' . $nama);
            }
        }
        return redirect('/')->with('gagal', 'anda gagal untuk login');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
