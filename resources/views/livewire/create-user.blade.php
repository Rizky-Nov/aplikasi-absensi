<form wire:submit.prevent='store' class="input-login w-100">
    @csrf
        <div class="form-group w-100">
            <label for="pw2">Konfirmasi Password</label>
            <input type="text" id="pw2" class="form-control w-100" placeholder="konfirmasi password anda">
        </div>

        <div class="form-group w-100">
            <label for="email">Email</label>
            <input type="text" id="email" class="form-control w-100" placeholder="masukkan email">
        </div>
        
        <div class="form-group w-100">
            <label for="password">Password</label>
            <input type="text" id="password" class="form-control w-100" placeholder="masukkan password">
        </div>
        
        <div class="form-group w-100">
            <label for="kode">Kode Invite</label>
            <input type="text" id="kode" class="form-control w-100" placeholder="masukkan kode invite">
        </div>

        <div>
            <button class="w-100 btn" style="background: #4ca1af; color: #FFFFFF">Sign Up</button>
        </div>
</form>