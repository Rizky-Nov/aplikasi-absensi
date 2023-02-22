<form wire:submit.prevent='store' class="col-12 d-flex flex-column align-items-end" style="gap: 24px">
    @csrf
    <div class="col-12 d-flex" style="gap: 24px">
      <div class="form-group w-100">
        <label for="kode-kelas">Kode Kelas</label>
        <input type="text" wire:model='kodetempat' id="kode-kelas" class="form-control w-100" placeholder="kode kelas">
      </div>

      <div class="form-group w-100">
        <label for="nama-kelas">Nama Kelas</label>
        <input type="text" wire:model='namatempat' id="nama-kelas" class="form-control w-100" placeholder="nama kelas">
      </div>
    </div>

    <div class="col-2" style="padding-right: 48px">
      <button type="submit" class="w-100 btn text-neutral-10 text-m-regular" style="height: 36px; background: #4ca1af;">Buat Kelas</button>
    </div>
  </form>