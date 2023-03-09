<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function Profile(Profile $profile)
    {
        // dd($profile);
        if (auth()->user()->profile->id == $profile->id && auth()->user()->id == $profile->user_id) {
            return view('profile.profile', ['profile' => $profile]);
        }
        return redirect('/home');
    }

    // public function Kelas(Kelas $kelas)
    // {
    //     if (auth()->user()->kelas->id == $kelas->id && auth()->user()->id == $kelas->user_id) {
    //         return view('profile.profile', ['profile' => $kelas]);
    //     }
    //     return redirect('/home');
    // }
}
