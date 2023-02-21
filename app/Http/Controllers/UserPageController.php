<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function HalamanUtama()
    {
        return view('user.user-dashboard');
    }
    
    public function DataPengguna()
    {
        return view('user.user-data-pengguna'); 
    }
    
    public function DaftarAbsensi()
    {
        return view('user.user-daftar-absensi'); 
    }
    
    public function DataAbsen()
    {
        return view('user.user-data-absen'); 
    }
}
