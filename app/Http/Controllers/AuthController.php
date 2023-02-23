<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        if(Auth::attempt($credit)){
            return redirect('/home');
        }
        return redirect('/')->with('error', 'anda gagal untuk login');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
