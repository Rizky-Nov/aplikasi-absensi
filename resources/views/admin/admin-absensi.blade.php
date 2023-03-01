    @section('judul')
        Absensi
    @endsection
    
<x-title title="Daftar Absensi">
    <div class="col-12 d-flex flex-column" style="gap: 24px" >
        <div class="col-12 d-flex flex-column align-items-center">
            <div class="pembuka col-12">
                <p>Ini adalah Absensi yang akan tampil untuk semua pengguna ! ! !</p>
        
                <div class="separator w-100"></div>
            </div>
    
            <div class="absensi col-10">
                <div class="col-6">
                    <div class="foto">
                        <p>Icon</p>
    
                        <div class="keterangan">
                            <span class="text-neutral-60 text-s-regular">Maksimal 1mb</span>
                            <span class="text-neutral-70 text-m-medium">Drag and Drop here or Select File ! ! !</span>
                        </div>
                    </div>
                </div>
    
                <div class="input col-6">
                    <div class="form-group w-100">
                    <label for="nama">Nama Lengkap</label>
                    <input disabled type="text" name="" id="nama" class="form-control w-100" placeholder="masukkan nama anda">
                    </div>
    
                    <div class="pilihan">
                        <div class="CMB">
                            <div class="kotak"></div>
                            <div class="text-neutral-100 text-m-regular">Hadir</div>
                        </div>
    
                        <div class="CMB">
                            <div class="kotak"></div>
                            <div class="text-neutral-100 text-m-regular">Sakit</div>
                        </div>
    
                        <div class="CMB">
                            <div class="kotak"></div>
                            <div class="text-neutral-100 text-m-regular">Izin</div>
                        </div>
                    </div>
    
                    <div class="form-group d-flex flex-column w-100">
                    <label for="keterangan">Keterangan</label>
                    <textarea disabled name="" id="keterangan" class="w-100" cols="30" rows="7" placeholder="keterangan ketidak hadiran"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator w-100"></div>
        
        <p class="header-s text-neutral-80 ps-5">Lama Absensi</p>

        <div class="col-10 d-flex h-50 p-0 m-0">
            
            <livewire:create-absensi />

        </div>
    </div>
</x-title>