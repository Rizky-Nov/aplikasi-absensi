<form wire:submit.prevent='store' class="input-login w-100">
    @csrf
    <div class="form-group w-100">
        <label for="email">Email</label>
        <input type="text" wire:model='email' id="email" class="form-control w-100" placeholder="masukkan email">
        @error('email') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
    </div>
    
    <div class="form-group w-100">
        <label for="password">Password</label>
        <input type="text" wire:model='password' id="password" class="form-control w-100" placeholder="masukkan password">
        @error('password') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
    </div>
    
    <div class="form-group w-100">
        <label for="pw2">Konfirmasi Password</label>
        <input type="text" wire:model='konfirm' id="pw2" class="form-control w-100" placeholder="konfirmasi password anda">
        @error('konfirm') <span class="text-danger text-s-regular">{{ $message }}</span> @enderror
    </div>
        
    <div class="form-group w-100">
        <label for="kode">Kode Invite</label>
        <input type="text" wire:model='kodekelas' id="kode" class="form-control w-100" placeholder="masukkan kode invite">
    </div>

    <div>
        <button class="w-100 btn" style="background: #4ca1af; color: #FFFFFF">Sign Up</button>
    </div>
</form>