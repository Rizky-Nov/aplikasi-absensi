<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateAdmin extends Component
{
    public function render()
    {
        return view('livewire.create-admin');
    }

    public $koderole;
    public $email;
    public $password;
    public $status;
    public $roleid;
    public $konfirm;

    protected $rules = [
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|alpha_num',
        'konfirm' => 'required|same:password',
    ];

    protected $messages = [
        'konfirm.same' => 'password tidak sama',

        'email.required' => 'email tidak boleh kosong',
        'email.unique' => 'email sudah dipakai',
        'email.email' => 'format email tidak valid',

        'password.required' => 'password tidak boleh kosong',
        'password.min' => 'minimal 6 karakter',
    ];  

    function updated($propertyName)
    {
        $cek = Role::where('kode_role', $this->koderole)->get();
        
        if ($cek->count() <= 0) {
            $this->status = false;
            $this->roleid = '';
        } else {
            $this->status = true;
            $this->roleid = $cek[0]->id;
        }
        $this->validateOnly($propertyName);
    }
    
    public function store()
    {
        if ($this->status == true) {
            $this->validate();

            $user = User::create([
                'role_id' => $this->roleid,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);

            Profile::create([
                'user_id' => $user->id,
            ]);

        } else {
            return abort(403);
        }

        return redirect('/')->with('BerhasilBuat', 'Akun Berhasil Dibuat');
    }
}
