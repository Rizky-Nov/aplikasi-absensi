<?php

namespace App\Http\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class CreateKelas extends Component
{
    public $kelas_id;
    public $userid;
    public $kodetempat;
    public $namatempat;
    public $status = false;

    public function render()
    {
        return view('livewire.create-kelas');
    }

    public function mount($kelas)
    {
        $this->kelas_id = $kelas->id;
        $this->userid = $kelas->user_id;
        $this->kodetempat = $kelas->kode_tempat;
        $this->namatempat = $kelas->nama_tempat;
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

    public function edit()
    {
        $getkelas = Kelas::find($this->kelas_id);

        $getkelas->update([
            'kode_tempat' => $this->kodetempat,
            'nama_tempat' => $this->namatempat,
        ]);
    }
}
