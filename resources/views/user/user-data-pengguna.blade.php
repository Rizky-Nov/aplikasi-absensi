    @section('judul')
        Data Pengguna
    @endsection

<x-title title="Data Pengguna">
    <div class="col-12">
        <table>
            <thead>
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
                    @foreach ($datapenggunas as $datapengguna)
                        <td>
                            <div class="col-12 d-flex flex-column">
                                <div class="user-pengguna">
                                    <div class="gambar-profile w-100 h-100">
                                        <span class="text-neutral-70 text-m-medium">{{ asset('storage/' . $datapengguna->foto) }}</span>
                                    </div>
                            
                                    <div class="keterangan-profile w-100 h-100">
                                        <span class="text-s-medium text-neutral-100">{{ $datapengguna->nama_lengkap }}</span>
                                        <span class="text-s-medium text-neutral-100">{{ $datapengguna->agama }}</span>
                                    </div>
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