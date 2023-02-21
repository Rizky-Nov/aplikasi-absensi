<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function AdminProfile()
    {
        return view('profile.admin-profile');
    }

    public function UserProfile()
    {
        return view('profile.user-profile'); 
    }
}
