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
        {{-- <span class="w-100 d-flex justify-content-center header-s text-neutral-90">{{ auth()->user()->kelas->nama_tempat }}</span> --}}
  
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
              <input type="text" {{ $status ? '' : "disabled" }} wire:model='agama'
              id="Agama-profile" class="form-control w-100" placeholder="agama">
            </div>
  
            <div class="form-group" style="width: 304.5px">
              <label for="JK-profile">Jenis Kelamin</label>
              <input type="text" {{ $status ? '' : "disabled" }} wire:model='jk'
              id="JK-profile" class="form-control w-100" placeholder="jenis kelamin">
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
        style="background: #4ca1af;" type="submit">Profile Edit</button>
    </div>
  </form>