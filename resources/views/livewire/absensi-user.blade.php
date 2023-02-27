<form action="#" class="input w-100">
    <div class="form-group w-100">
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="" id="nama" class="form-control w-100" placeholder="masukkan nama anda">
    </div>
    
    <div class="d-flex">
        <div class="form-check form-check-inline">
            <input class="form-check-input" wire:model='absenhadir' type="radio" value="Hadir" id="hadir">
            <label class="form-check-label" for="hadir">Hadir</label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" wire:model='absensakit' type="radio" value="Sakit" id="sakit">
            <label class="form-check-label" for="sakit">Sakit</label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" wire:model='absenizin' type="radio" value="Izin" id="izin">
            <label class="form-check-label" for="izin">Izin</label>
        </div>
    </div>
    
    <div class="form-group d-flex flex-column w-100">
        <label for="keterangan">Keterangan</label>
        <textarea name="" id="keterangan" 
        wire:model.lazy='keterangan' class=" p-2 input-form input-form-lg h-auto placeholder-m-r" 
        rows="6" placeholder="keterangan ketidak hadiran"></textarea>
    </div>

    <div class="w-100 d-flex justify-content-end" style="padding-right: 36px;">
        <button type="submit" class="btn btn-success d-flex justify-content-center align-items-center" style="width: 100px; height: 32px;">Kirim</button>
    </div>
</form>