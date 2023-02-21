@section('judul')
Profile
@endsection

<x-title title="Profile">
  <div class="col-12 d-flex">
  <div class="col-3 d-flex flex-column align-items-center">
    <div class="foto-profile">
    Ini Foto
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

    <div class="col d-flex flex-column align-items-center" style="gap: 36px">
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
            <textarea name="" id="alamat" rows="3" class="w-100" placeholder="alamat anda"></textarea>
          </div>

        </div>
      </form>
    </div>
  </div>
</x-title>