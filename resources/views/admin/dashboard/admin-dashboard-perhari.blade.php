    @section('judul')
        Dashboard
    @endsection
    
<x-title class="h-100">
    <div class="col-12 d-flex flex-column h-100">
        <div class="datas col-12 d-flex justify-content-center">
            <div class="data">
                <p class="text-m-medium text-neutral-100">Jumlah Pengguna</p>

                <div class="separator w-100"></div>
                {{ auth()->user()->profile }}
            </div>
            
            <div class="data">
                <p class="text-m-medium text-neutral-100">Absen Hari Ini</p>

                <div class="separator w-100"></div>
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
</x-title>