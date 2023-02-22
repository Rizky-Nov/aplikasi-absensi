<?php

namespace App\Http\Livewire;

use App\Models\Kelas;
use Livewire\Component;

class CreateKelas extends Component
{
    public $kodetempat;
    public $namatempat;

    public function render()
    {
        return view('livewire.create-kelas');
    }

    public function store()
    {
        Kelas::create([
            'user_id' => auth()->user()->id,
            'kode_tempat' => $this->kodetempat,
            'nama_tempat' => $this->namatempat,
        ]);

        return redirect('/profile');
    }
}
