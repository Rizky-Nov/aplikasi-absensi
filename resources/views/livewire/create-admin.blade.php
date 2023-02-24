<form wire:submit.prevent='store' class="input-login w-100">
    @csrf
        <div class="form-group w-100">
            <label for="kode">Kode Admin</label>
            <input type="text" wire:model.debounce='koderole' value="{{ old('kode') }}"
            id="kode" class="form-control w-100" placeholder="masukkan kode untuk admin">
        </div>
    
        <div class="form-group w-100">
            <label for="email">Email</label>
            <input {{ $status == true ? '' : "disabled" }} 
            type="text" wire:model.lazy='email' value="{{ old('email') }}" 
            id="email" class="form-control w-100" placeholder="masukkan email">
            @error('email') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
        </div>
        
        <div class="form-group w-100">
            <label for="password">Password</label>
            <input {{ $status == true ? '' : "disabled" }} 
            type="password" wire:model.lazy='password' value="{{ old('password') }}"
            id="password" class="form-control w-100" placeholder="masukkan password">
            @error('password') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
        </div>
        
        <div class="form-group w-100">
            <label for="pw2">Konfirmasi Password</label>
            <input {{ $status == true ? '' : "disabled" }} 
            wire:model.lazy.defer='konfirm' type="password" id="pw2" class="form-control w-100" placeholder="konfirmasi password anda">
            @error('konfirm') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
        </div>
    
        <div>
            <button class="w-100 btn" style="background: #4ca1af; color: #FFFFFF">Sign Up</button>
        </div>
  </form>