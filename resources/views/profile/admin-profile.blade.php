    @section('judul')
    Profile
    @endsection

<x-title title="Profile">
<div class="col-12 d-flex flex-column">
  <div class="col d-flex">
    <div class="col-3 d-flex flex-column align-items-center">
      <div class="foto-profile">
        <img src="{{ asset('gambar/profile-contoh.jpg') }}" class="w-100 h-100" alt="">
      </div>
  
      <div class="akunnya w-100">
        <div class="form-group w-100">
          <label for="email">Email</label>
          <input type="text" name="" id="email" class="form-control w-100" placeholder="Email">
        </div>
    
        <div class="form-group w-100">
        <label for="pw">Password</label>
        <input type="text" name="" id="pw" class="form-control w-100" placeholder="Password">
        </div>
      </div>
    </div>
  
    <div class="col-8 d-flex flex-column align-items-center" style="gap: 36px">
      <div class="col-8">
        <span class="w-100 d-flex justify-content-center header-s text-neutral-90">Nama Tempat</span>
  
        <div class="separator w-100 mt-2"></div>
      </div>
  
      <form action="#" class="col-10">   
        <div class="data-diri-profile col-12">
  
          <div class="input-profile">
            <div class="form-group" style="width: 411px">
              <label for="nama-profile">Nama Lengkap</label>
              <input type="text" name="" id="nama-profile" class="form-control w-100" placeholder="nama lengkap anda">
            </div>
  
            <div class="form-group" style="width: 305px">
              <label for="No-profile">No Telephone</label>
              <input type="text" name="" id="No-profile" class="form-control w-100" placeholder="+62 812 8429 2341">
            </div>
          </div>
  
          <div class="input-profile">
            <div class="form-group" style="width: 250.5px">
              <label for="TL-profile">Tempat Lahir</label>
              <input type="text" name="" id="TL-profile" class="form-control w-100" placeholder="tempat lahir anda">
            </div>
  
            <div class="form-group" style="width: 250.5px">
              <label for="TGL-profile">Tanggal Lahir</label>
              <input type="date" name="" id="TGL-profile" class="form-control w-100" placeholder="Tanggal Lahir">
            </div>
          </div>
  
          <div class="input-profile">
            <div class="form-group" style="width: 304.5px">
              <label for="Agama-profile">Agama</label>
              <input type="text" name="" id="Agama-profile" class="form-control w-100" placeholder="agama">
            </div>
  
            <div class="form-group" style="width: 304.5px">
              <label for="JK-profile">Jenis Kelamin</label>
              <input type="text" name="" id="JK-profile" class="form-control w-100" placeholder="jenis kelamin">
            </div>
          </div>
  
          <div class="form-group w-100">
            <label for="alamat">Alamat</label>
            <textarea name="" id="alamat" rows="3" class="w-100 border p-2 rounded-2" placeholder="alamat anda"></textarea>
          </div>
  
        </div>
      </form>
    </div>

    <div class="col">
      <form action="" class="w-100 d-flex justify-content-center">
        <button class="btn btn-success w-100" type="submit">Edit Profile</button>
      </form>
    </div>
  </div>

  <div class="col-12 d-flex flex-column align-items-center" style="margin-top: 80px">
    <div class="col-12 d-flex flex-column" style="gap: 24px">
      <div class="separator w-100"></div>

      <div class="d-flex flex-column align-items-center">
        <span class="header-m text-neutral-100">Buat Kelas</span>
        <span class="text-s-medium text-neutral-80">Kelas ini dibuat untuk user melakukan Sign-Up menggunakan kode kelas !</span>
      </div>

      <form action="#" class="col-12 d-flex flex-column align-items-end" style="gap: 24px">
        <div class="col-12 d-flex" style="gap: 24px">
          <div class="form-group w-100">
            <label for="kode-kelas">Kode Kelas</label>
            <input type="text" name="" id="kode-kelas" class="form-control w-100" placeholder="kode kelas">
          </div>
  
          <div class="form-group w-100">
            <label for="nama-kelas">Nama Kelas</label>
            <input type="text" name="" id="nama-kelas" class="form-control w-100" placeholder="nama kelas">
          </div>
        </div>

        <div class="col-2" style="padding-right: 48px">
          <button type="submit" class="w-100 btn btn-success" style="height: 36px;">Buat Kelas</button>
        </div>
      </form>
    </div>
  </div>
</div>
</x-title>