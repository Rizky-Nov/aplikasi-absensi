    @section('judul')
        Dashboard
    @endsection
    
<x-title class="h-100">
    <div class="col-12 d-flex flex-column h-100">
        <div class="datas col-12 d-flex justify-content-center">
            <div class="data">
                <p class="text-m-medium text-neutral-100">Jumlah Pengguna</p>

                <div class="separator w-100"></div>
            </div>
            
            <div class="data">
                <p class="text-m-medium text-neutral-100">Absen Hari Ini</p>

                <div class="separator w-100"></div>

                <div class="">
                    {{ date('h-i-s') }}
                </div>
            </div>
            
            <div class="data">
                <p class="text-m-medium text-neutral-100">Sakit Hari Ini</p>

                <div class="separator w-100"></div>
            </div>
            
            <div class="data">
                <p class="text-m-medium text-neutral-100">Izin Hari Ini</p>

                <div class="separator w-100"></div>
            </div>
            
            <div class="data">
                <p class="text-m-medium text-neutral-100">Alpa Hari Ini</p>

                <div class="separator w-100"></div>
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