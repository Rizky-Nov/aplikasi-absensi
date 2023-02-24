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
                    
                    <livewire:absensi-user />

                </div>
            </div>
        </div>
    </div>
</x-title>