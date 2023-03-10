<form wire:submit.prevent='setStatus' class="col-12 d-flex flex-column align-items-end" style="gap: 24px">
    @csrf
    <div class="col-12 d-flex" style="gap: 24px">
      <div class="form-group w-100">
        <label for="kode-kelas">Kode Kelas</label>
        <input type="text" 
        {{ $status ? '' : "disabled" }}
        wire:model='kodetempat' id="kode-kelas" class="form-control w-100" placeholder="kode kelas minimal 8 karakter">
      </div>

      <div class="form-group w-100">
        <label for="nama-kelas">Nama Kelas</label>
        <input type="text" 
        {{ $status ? '' : "disabled" }}
        wire:model='namatempat' id="nama-kelas" class="form-control w-100" placeholder="nama kelas, diharapkan nama tempat yang benar">
      </div>
    </div>

    <div class="col-2" style="padding-right: 48px">
      <button class="w-100 btn text-neutral-10 text-m-regular" style="height: 36px; background: #4ca1af;">{{ $status ? 'Simpan' : 'Kelas' }}</button>
    </div>
  </form>