<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function Profile(Profile $profile)
    {
        if (auth()->user()->profile->id == $profile->id && auth()->user()->id == $profile->user_id) {
            return view('profile.admin-profile', ['profile' => $profile]);
        }
        return redirect('/home');
    }
}
