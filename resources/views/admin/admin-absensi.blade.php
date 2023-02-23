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
        <p class="text-l-medium text-neutral-100 ps-5">Lama Absensi</p>

        <div class="col-10 d-flex p-0 m-0">
            <form action="#" class="d-flex">
                <div class="col-6 p-0 m-0">
                    <div class="container-fluid p-0 m-0 inilah">
                        <div class="form-group">
                            <label for="MJ">Mulai Jam</label>
                            <input type="text" name="" id="MJ" class="jam form-control" placeholder="07.00">
                        </div>

                        <div class="form-group">
                            <label for="HJ">Hingga Jam</label>
                            <input type="text" name="" id="HJ" class="jam form-control" placeholder="09.30">
                        </div>
                    </div>

                    <div class="inilah" style="width: 306px">
                        <div class="form-group">
                            <label for="MH">Mulai Hari</label>
                            <input type="text" name="" id="MH" class="hari form-control" placeholder="Senin">
                        </div>

                        <div class="form-group">
                            <label for="HH">Hingga Hari</label>
                            <input type="text" name="" id="HH" class="hari form-control" placeholder="Jum'at">
                        </div>
                    </div>
                </div>

                <div class="col-6 kanan">
                    <div class="form-group w-100">
                        <label for="MT">Mulai Tanggal</label>
                        <input type="date" name="" id="MT" class="form-control w-100">
                    </div>

                    <div class="form-group w-100">
                        <label for="HT">Hingga Tanggal</label>
                        <input type="date" name="" id="HT" class="form-control w-100">
                    </div>

                    <div class="d-flex justify-content-end pe-5">
                        <button type="submit" class="btn btn-success d-flex justify-content-center align-items-center" style="width: 140px; height: 32px;">Unggah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-title>