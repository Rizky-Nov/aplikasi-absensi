<?php

namespace App\Http\Livewire;

use App\Models\Profile as ModelsProfile;
use Livewire\Component;

class Profile extends Component
{
    public $namalengkap;
    public $alamat;
    public $notelp;
    public $agama;
    public $jk;
    public $tempatlahir;
    public $tgllahir;

    public function render()
    {
        return view('livewire.profile');
    }

    public function update()
    {
        Profile::update([
            'nama_lengkap' => $this->namalengkap,
            'alamat' => $this->alamat,
            'no_telp' => $this->notelp,
            'agama' => $this->agama,
            'jenis_kelamin' => $this->jk,
            'tempat_lahir' => $this->tempatlahir,
            'tgl_lahir' => $this->tgllahir,
        ]);

        $this->render();
    }
}
