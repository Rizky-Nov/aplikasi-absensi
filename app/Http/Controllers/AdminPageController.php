<?php

namespace App\Http\Controllers;

use App\Models\DetailAbsensi;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function HalamanUtama()
    {
        return view('admin.dashboard.admin-dashboard-perhari');
    }
    
    public function Absensi()
    {
        return view('admin.admin-absensi');
    }

    public function DataPengguna()
    {
        return view('admin.admin-data-pengguna');
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
