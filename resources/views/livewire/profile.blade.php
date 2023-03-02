<form wire:submit.prevent='setStatus' class="col d-flex">
  @csrf
  <div class="col-3 d-flex flex-column align-items-center">
    <div class="foto-profile">
      @if (auth()->user()->profile->foto == null)
          <p class="d-flex justify-content-center align-items-center">Foto Profile</p>
      @else
      <img src="{{ asset('storage/' . auth()->user()->profile->foto) }}" class="w-100 h-100" alt="">
      @endif
    </div>

    <input {{ $status ? '' : "disabled" }} wire:model='foto' type="file" class="mt-3" style="">
    @error('photo') <span class="error">{{ $message }}</span> @enderror
    
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
            <input wire:model='agama' type="text" {{ $status ? '' : "disabled" }} class="form-control w-100" id="Agama-profile">
          </div>

          <div class="form-group" style="width: 304.5px">
            <label for="JK-profile">Jenis Kelamin</label>
            <input type="text" wire:model='jk' {{ $status ? '' : "disabled" }} class="form-control w-100" id="JK-profile">
          </div>
        </div>

        <div class="form-group w-100">
          <label for="alamat">Alamat</label>
          <textarea {{ $status ? '' : "disabled" }} wire:model='alamat'
          id="alamat" rows="3" class="p-2 input-form input-form-lg h-auto placeholder-m-r" placeholder="alamat anda"></textarea>
        </div>

      </div>
    </div>
    
  </div>

  <div class="col w-100 d-flex justify-content-center" style="height: 36px;">
      <button class="btn text-neutral-10 text-m-regular w-100" 
      style="background: #4ca1af;" type="submit">{{ $status ? 'Simpan' : 'Edit Profile' }}</button>
  </div>
</form>