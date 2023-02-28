    @section('judul')
        Data Pengguna
    @endsection

<x-title title="Data Pengguna">
    <div class="col-12">
        <table>
            <thead class="col-12">
                <tr>
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
                            <div class="col-12 d-flex flex-column" style="margin-top: 48px; margin-left: 36px">
                                <div class="admin-pengguna">
                                    <div class="gambar-profile w-100 h-100">
                                        @if ($datapengguna->profile->foto == null)
                                            <p class="header-m text-neutral-70">P</p>
                                        @else
                                            <img src="{{ asset('storage/' . $datapengguna->profile->foto) }}" class="foto-pengguna w-100 h-100" alt="">
                                        @endif
                                    </div>
                    
                                    <div class="keterangan-profile w-100 h-100">
                                        <span class="text-s-medium text-neutral-100">{{ $datapengguna->profile->nama_lengkap }}</span>
                                        <span class="text-s-medium text-neutral-100">{{ $datapengguna->profile->no_telp }}</span>
                                        <span class="text-s-medium text-neutral-100">{{ $datapengguna->profile->alamat }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>

                        @if ($loop->iteration %4 == 0)
                            </tr>
                            
                            <tr>
                        @endif

                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</x-title>