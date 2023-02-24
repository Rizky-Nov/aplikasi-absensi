<form wire:submit.prevent='setStatus' class="col d-flex">
  @csrf
  <div class="col-3 d-flex flex-column align-items-center">
    <div class="foto-profile">
      <img src="{{ asset('gambar/profile-contoh.jpg') }}" class="w-100 h-100" alt="">
    </div>
    <div class="akunnya w-100">
      <div class="form-group w-100">
        <label for="email">Email</label>
        <input disabled type="text" id="email" value="{{ auth()->user()->email }}" 
        class="form-control w-100" placeholder="Email">
      </div>
  
      <div class="form-group w-100">
      <label for="pw">Password</label>
      <input disabled type="password" value="{{ $password }}"
      id="pw" class="form-control w-100" placeholder="Password">
      </div>
    </div>
  </div>

  <div class="col-8 d-flex flex-column align-items-center" style="gap: 36px">
    <div class="col-8">
      @can('IsUser')
        <span class="w-100 d-flex justify-content-center header-m text-neutral-90">{{ auth()->user()->detail_kelas[0]->kelas->nama_tempat }}</span>
      @endcan
      <div class="separator w-100 mt-2"></div>
    </div>

    <div class="col-10">
      <div class="data-diri-profile col-12">
  
        <div class="input-profile">
          <div class="form-group" style="width: 411px">
            <label for="nama-profile">Nama Lengkap</label>
            <input type="text" {{ $status ? '' : "disabled" }} wire:model='namalengkap' 
            id="nama-profile" class="form-control w-100" placeholder="nama lengkap anda">
          </div>

          <div class="form-group" style="width: 305px">
            <label for="No-profile">No Telephone</label>
            <input type="text" {{ $status ? '' : "disabled" }} wire:model='notelp'
            id="No-profile" class="form-control w-100" placeholder="+62 812 8429 2341">
          </div>
        </div>

        <div class="input-profile">
          <div class="form-group" style="width: 250.5px">
            <label for="TL-profile">Tempat Lahir</label>
            <input type="text" {{ $status ? '' : "disabled" }} wire:model='tempatlahir'
            id="TL-profile" class="form-control w-100" placeholder="tempat lahir anda">
          </div>

          <div class="form-group" style="width: 250.5px">
            <label for="TGL-profile">Tanggal Lahir</label>
            <input type="date" {{ $status ? '' : "disabled" }} wire:model='tgllahir'
            id="TGL-profile" class="form-control w-100" placeholder="Tanggal Lahir">
          </div>
        </div>

        <div class="input-profile">
          <div class="form-group" style="width: 304.5px">
            <label for="Agama-profile">Agama</label>
            <select wire:change='$emit("getagama")' {{ $status ? '' : "disabled" }} class="w-100" id="Agama-profile">
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Protestan">Protestan</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
            </select>
          </div>

          <div class="form-group" style="width: 304.5px">
            <label for="JK-profile">Jenis Kelamin</label>
            <select wire:change='$emit("getjk")' wire:ignore {{ $status ? '' : "disabled" }} class="w-100" id="JK-profile">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>

        <div class="form-group w-100">
          <label for="alamat">Alamat</label>
          <textarea {{ $status ? '' : "disabled" }} wire:model='alamat'
          id="alamat" rows="3" class="w-100 border p-2 rounded-2" placeholder="alamat anda"></textarea>
        </div>

      </div>
    </div>
    
  </div>

  <div class="col w-100 d-flex justify-content-center" style="height: 36px;">
      <button class="btn text-neutral-10 text-m-regular w-100"
      style="background: #4ca1af;" type="submit">{{ $status ? 'Simpan' : 'Edit Profile' }}</button>
  </div>
</form>

@push('scripts')
  <script>
    Livewire.on('getagama', function () {
      var value = document.querySelector('#Agama-profile').value;
      Livewire.emit('setagama', value);
    })

    Livewire.on('getjk', function () {
      var value = document.querySelector('#JK-profile').value;
      Livewire.emit('setjk', value);
    })
  </script>
@endpush