<?php

namespace App\Http\Controllers;

use App\Models\DetailAbsensi;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function HalamanUtama()
    {
        if (auth()->user()->role->nama_role == 'admin') {
            return view('admin.dashboard.admin-dashboard-perhari');
        } else {
            return view('user.user-dashboard');
        }
    }
    
    public function Absensi()
    {
        if (auth()->user()->role->nama_role == 'admin') {
            return view('admin.admin-absensi');
        } else {
            return view('user.user-daftar-absensi');
        }
    }

    public function DataPengguna()
    {
        if (auth()->user()->role->nama_role == 'admin') {
            return view('admin.admin-data-pengguna');
        } else {
            return view('user.user-data-pengguna');
        }
    }

    public function DataAbsen()
    {
        return view('user.user-data-absen'); 
    }
    
    public function AbsenHariIni()
    {
        $detailabsensis = DetailAbsensi::orderByDesc('created_at')->orderByDesc('jam_absen');

        return view('admin.admin-data-absensi-harian', [
            'detailabsensis' => $detailabsensis->get(),
        ]);
    }
    
    public function AbseniBulanan()
    {
        return view('admin.admin-data-absensi-bulanan');
    }
}
