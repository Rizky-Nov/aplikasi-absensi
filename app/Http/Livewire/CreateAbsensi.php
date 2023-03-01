<?php

namespace App\Http\Livewire;

use App\Models\Absensi;
use Livewire\Component;

class CreateAbsensi extends Component
{
    public $JM;
    public $JA;

    public $HM;
    public $HA;

    public $TM;
    public $TA;
    
    public $status = false;

    public function render()
    {
        return view('livewire.create-absensi');
    }

    function setStatus()
    {
        if ($this->status == false) {
            $this->status = true;
        } elseif ($this->status == true) {
            $this->edit();
            $this->status = false;
        }
    }

    public function store()
    {
        Absensi::create([
            'jam_mulai' => $this->JM,
            'jam_kadaluarsa' => $this->JA,
            'tanggal_mulai' => $this->TM,
            'tanggal_kadaluarsa' => $this->TA,
        ]);
    }
}
