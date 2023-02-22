<?php

namespace App\Http\Livewire;

use App\Models\Profile as ModelsProfile;
use Illuminate\Support\Str;
use Livewire\Component;

class Profile extends Component
{
    public $status = false;

    public $namalengkap;
    public $alamat;
    public $notelp;
    public $agama;
    public $jk;
    public $tempatlahir;
    public $tgllahir;
    public $userid;

    public function render()
    {
        return view('livewire.profile', [
            'password' => Str::limit(auth()->user()->password, 10, '')
        ]);
    }

    function setStatus()
    {
        if ($this->status == false) {
            $this->status = true;
        } elseif ($this->status == true) {
            $this->status = false;
            $this->getProfile(auth()->user()->id);
        }
    }

    public function getProfile($id)
    {
        $profile = ModelsProfile::find($id);
        
        $this->userid = $profile->user_id;
        $this->alamat = $profile->alamat;
        $this->notelp = $profile->no_telp;
        $this->agama = $profile->agama;
        $this->jk = $profile->jenis_kelamin;
        $this->tempatlahir = $profile->tempat_lahir;
        $this->tgllahir = $profile->tgl_lahir;
    }

    public function edit()
    {
        $getprofile = ModelsProfile::find($this->userid);

        $getprofile->update([
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
