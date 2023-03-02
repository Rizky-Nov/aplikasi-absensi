@section('judul')
    Dashboard
@endsection
<x-title class="h-100">
    <div class="col-12 d-flex flex-column">
        <div class="col-12 d-flex justify-content-center" style="padding:0 18px; margin-top: 36px">
            <div class="bagian-atas-user col-10">
                <div class="atas-kiri-user-nih col-6">
                    <span class="header-s text-neutral-100">Selamat Datang</span>
                    <div class="separator w-100"></div>

                    <div class="d-flex flex-column align-items-center">
                        <span class="text-m-medium text-neutral-100">{{ auth()->user()->profile->nama_lengkap }}</span>
                        <span class="text-s-regular text-neutral-100">Jangan Lupa Untuk Absen Ya</span>
                    </div>
                </div>

                <div class="atas-kanan-user-nih col-6">
                    <p class="header-m text-neutral-10">B -- TAK SI</p>
                </div>
            </div>

        </div>
        
        <div class="d-flex" style="margin-top: 84px; margin-left: 16px;">
            <div class="bagian-bawah-isi-user col-5">
                <div class="bawah-kiri-user col-6">
                    <p class="header-m text-neutral-10">B -- TAK SI</p>
                </div>
    
                <div class="bawah-kanan-user col-6">
                    <p class="header-s text-neutral-100">B -- TAK SI</p>
                    <div class="separator w-100"></div>
    
                    <p class="text-m-regular text-neutral-100">
                        Aplikasi ini gunakan untuk melakukan absensi setiap harinya dari mana saja.
                        <br>
                        <br>
                        Aplikasi ini memudahkan kita untuk memberikan keterangan jika tidak hadir karena suatu alasan.
                        <br>
                        <br>
                        Aplikasi ini juga dapat memudah kan pengguna untuk melihat absensi yang sudah dilakukan sebelumnya. Ini juga dapat menjadi rujukan jika ada kesalahan dalam absensi.
                    </p>
                </div>
            </div>
    
            <div class="col d-flex justify-content-end" style="padding-right: 48px">
                <div class="d-flex justify-content-end">
                    Ini kalender
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('berhasil'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(() => {
                Livewire.emit('toastify', ['success', {{ session('berhasil') }}, 3500]);
            }, 500);
        });
    </script>
    @endif
</x-title>