<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateAbsensi extends Component
{
    public $JM;
    public $JA;
    public $TM;
    public $TA;

    public function render()
    {
        return view('livewire.create-absensi');
    }


}
