<form wire:submit.prevent='store' class="input-login w-100">
    @csrf
    <div class="form-group w-100">
        <label for="email">Email</label>
        <input type="text" wire:model.lazy='email' id="email" class="form-control w-100" placeholder="massukkan email anda">
        @error('email') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
    </div>
    
    <div class="form-group w-100">
        <label for="password">Password</label>
        <input type="password" wire:model.lazy='password' id="password" class="form-control w-100" placeholder="masukkan password anda">
        @error('password') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
    </div>
    
    <div class="form-group w-100">
        <label for="pw2">Konfirmasi Password</label>
        <input type="password" wire:model.lazy='konfirm' id="pw2" class="form-control w-100" placeholder="konfirmasi password anda">
        @error('konfirm') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
    </div>
        
    <div class="form-group w-100">
        <label for="kode">Kode Invite</label>
        <input type="text" wire:model.lazy='kodekelas' id="kode" class="form-control w-100" placeholder="masukkan kode invite">
        @error('kodekelas') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
    </div>

    <div>
        <button class="w-100 btn" style="background: #4ca1af; color: #FFFFFF">Sign Up</button>
    </div>
</form>