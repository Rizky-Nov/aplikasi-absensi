<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FotoProfile extends Component
{
    protected $listener = [
        'fresh',
    ];

    public function fresh()
    {
        dd("masuk ga bang");
        $this->render();
    }

    public function render()
    {
        return view('livewire.foto-profile');
    }

}
