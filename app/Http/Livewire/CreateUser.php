<?php

namespace App\Http\Livewire;

use App\Models\DetailKelas;
use App\Models\Kelas;
use App\Models\Profile;
use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    public function render()
    {
        return view('livewire.create-user');
    }

    public $kodekelas;
    public $email;
    public $password;
    public $status;
    public $kelasid;
    public $konfirm;

    protected $rules = [
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|alpha_num',
        'konfirm' => 'required|same:password',
    ];

    protected $messages = [
        'konfirm.same' => 'password tidak berbeda',

        'email.required' => 'email tidak boleh kosong',
        'email.unique' => 'email sudah dipakai',
        'email.email' => 'format email tidak valid',

        'password.required' => 'password tidak boleh kosong',
        'password.min' => 'minimal 6 karakter',
    ];  

    function updated($propertyName)
    {
        $cek = Kelas::where('kode_tempat', $this->kodekelas)->get();
        
        if ($cek->count() <= 0) {
            $this->kelasid = '';
        } else {
            $this->kelasid = $cek[0]->id;
        }

        if ($propertyName != 'konfirm') {
            $this->validateOnly($propertyName);
        } 

        // $this->emit('toastify', ['success', 'Akun Berhasil Dibuat', 3000]);
    }

    public function store()
    {
        $this->validate();

        $user = User::create([
            'kelas_id' => $this->kelasid,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        DetailKelas::create([
            'user_id' => $user->id,
            'kelas_id' => $this->kelasid,
        ]);

        Profile::create([
            'user_id' => $user->id,
        ]);

        return redirect('/')->with('BerhasilBuat', 'Akun Berhasil Dibuat');
    }
}
