@section('judul')
Data Absensi Bulanan
@endsection

<x-title title="Data Absen">
    <table>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                @foreach ($detailabsensis as $detailabsensi)
                    <td>
                        {{-- <div class="card-absen">
                            <div class="data-gambar">
                                <span>Gambar</span>
                            </div>
                    
                            <div class="data-absen">
                                <div class="d-flex flex-column" style="gap: 4px">
                                    <span class="text-s-medium text-neutral-100">{{ $detailabsensi->profile->nama_lengkap }}</span>
                                    
                                    <div class="separator w-100"></div>
                                    
                                    <span class="text-s-medium text-neutral-100">Hadir</span>
                                    <span class="text-s-medium text-neutral-100">Sakit</span>
                                    <span class="text-s-medium text-neutral-100">Izin</span>
                                    <span class="text-s-medium text-neutral-100">Alpa</span>
                                    
                                </div>
                            </div>
                        </div> --}}
                    </td>

                    @if ($loop->iteration %6 == 0)
                        </tr>
                        
                        <tr>
                    @endif
                @endforeach
            </tr>
        </tbody>
    </table>
</x-title>