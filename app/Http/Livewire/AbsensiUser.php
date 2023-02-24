<?php

namespace App\Http\Livewire;

use App\Models\DetailAbsensi;
use Illuminate\Http\Request;
use Livewire\Component;
use Symfony\Component\Console\Input\Input;

class AbsensiUser extends Component
{
    public $jamabsen;
    public $absenhadir;
    public $absensakit;
    public $absenizin;
    public $keterangan;
    public $status = false;

    public function render()
    {
        return view('livewire.absensi-user');
    }

    public function setStatus()
    {
        if ($this->status == true) {
            $this->status = false;
        } elseif ($this->status == false) {
            $this->status = true;
        }
    }

    public function store()
    {
        if ($this->absenhadir) {
            DetailAbsensi::create([
                'jam_absen' => date('H-i-s'),
                'absen' => $this->absenhadir,
                'keterangan' => "Hadir",
            ]);
        } elseif ($this->absensakit) {
            DetailAbsensi::create([
                'jam_absen' => date('H-i-s'),
                'absen' => $this->absensakit,
                'keterangan' => $this->keterangan,
            ]);
        } elseif ($this->absenizin) {
            DetailAbsensi::create([
                'jam_absen' => date('H-i-s'),
                'absen' => $this->absenizin,
                'keterangan' => $this->keterangan,
            ]);
        }
        return redirect('data-absen');
    }
}
