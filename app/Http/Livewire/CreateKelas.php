<?php

namespace App\Http\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class CreateKelas extends Component
{
    public function render()
    {
        return view('livewire.create-kelas');
    }

    public $kodetempat;
    public $namatempat;


    public function store()
    {
        Kelas::create([
            'kode_tempat' => $this->kodetempat,
            'nama_tempat' => $this->namatempat,
        ]);

        return redirect('/profile');
    }
}
