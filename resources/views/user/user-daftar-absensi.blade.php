@section('judul')
    Daftar Absensi
@endsection

<x-title title="Daftar Absensi">
    <div class="col-12 d-flex flex-column" style="gap: 24px" >
        <div class="col-12 d-flex flex-column align-items-center">
            <div class="pembuka col-12 mt-3">
                <span class="text-l-medium text-neutral-80">Absen Dimulai Jam Berapanya Hingga Jam Berapanya Setiap Harinya ! !</span>
                <span class="text-s-regular text-neutral-80 mt-2">Mulai Harinya Hingga Harinya !</span>
                <div class="separator w-100 mt-3"></div>
            </div>


            <div class="absensi col-10" style="margin-top: 48px;">
                <div class="col-6">
                    <div class="user-foto">
                        <p>Icon</p>

                        <div class="keterangan">
                            <span class="text-neutral-60 text-s-regular">Maksimal 1mb</span>
                            <span class="text-neutral-70 text-m-medium">Drag and Drop here or Select File ! ! !</span>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <form action="#" class="input w-100">
                        <div class="form-group w-100">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="" id="nama" class="form-control w-100" placeholder="masukkan nama anda">
                        </div>
                        
                        <div class="d-flex">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="hadir">
                                <label class="form-check-label" for="hadir">Hadir</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sakit">
                                <label class="form-check-label" for="sakit">Sakit</label>
                            </div>
                            
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="izin">
                                <label class="form-check-label" for="izin">Izin</label>
                            </div>
                        </div>
                        
                        <div class="form-group d-flex flex-column w-100">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="" id="keterangan" class="w-100 border p-2" cols="30" rows="7" placeholder="keterangan ketidak hadiran"></textarea>
                        </div>

                        <div class="w-100 d-flex justify-content-end" style="padding-right: 36px;">
                            <button type="submit" class="btn btn-success d-flex justify-content-center align-items-center" style="width: 100px; height: 32px;">Kirim</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-title>