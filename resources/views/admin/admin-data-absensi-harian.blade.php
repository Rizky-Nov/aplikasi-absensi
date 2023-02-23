    @section('judul')
    Data Absensi Harian
    @endsection

<x-title title="Data Absen">
    <div class="col-12">
        <table class="col-12">
            <thead class="col-12">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    @foreach ( $detailabsensis as $detailabsensi )
                        <td>
                            <div class="card-absen">
                                <div class="data-gambar">
                                    <img src="{{ asset('storage/' . $detailabsensi->foto) }}" style="width: 180px; height: 120px; border-radius: 12px 12px 0px 0px;" alt="">
                                </div>
                        
                                <div class="data-absen">
                                    <div class="d-flex flex-column">
                                        <span class="text-s-medium text-neutral-100">{{ $detailabsensi->profile->nama_lengkap}}</span>
                                        <span class="text-s-medium text-neutral-100">{{ $detailabsensi->absen }}</span>
                                    </div>
                        
                                    <div class="separator w-100"></div>
                        
                                    <span class="text-s-medium text-neutral-100">{{ $detailabsensi->keterangan }}</span>
                        
                                    <span class="w-100 d-flex justify-content-end text-s-medium text-neutral-100">Tanggal</span>
                                </div>
                            </div>
                        </td>

                        @if ($loop->iteration %6 == 0)
                            </tr>
                            
                            <tr>
                        @endif
                        
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</x-title>