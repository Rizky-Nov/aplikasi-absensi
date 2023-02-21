<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function Profile()
    {
        if (auth()->user()->role->nama_role == 'admin') {
            return view('profile.admin-profile');            
        } else {
            return view('profile.user-profile');
        }
    }
}
