<form wire:submit.prevent='store' class="d-flex">
    <div class="col-6 p-0 ms-4">
        <div class="container-fluid p-0 m-0 inilah">
            <div class="form-group">
                <label for="MJ">Mulai Jam</label>
                <input type="time" wire:model.lazy='JM' id="MJ" class="jam form-control" placeholder="07.00">
            </div>

            <div class="form-group">
                <label for="HJ">Hingga Jam</label>
                <input type="time" wire:model.lazy='JA' id="HJ" class="jam form-control" placeholder="09.30">
            </div>
        </div>

        <div class="inilah" style="width: 306px">
            <div class="form-group">
                <label for="MH">Mulai Hari</label>
                <select class="select-form" id="MH" style="height: 48px;">
                    <option value="Mon">Senin</option>
                    <option value="Tue">Selasa</option>
                    <option value="Wed">Rabu</option>
                    <option value="Thu">Kamis</option>
                    <option value="Fri">Jum`at</option>
                    <option value="Sat">Sabtu</option>
                    <option value="Sun">Minggu</option>
                </select>
            </div>

            <div class="form-group">
                <label for="HH">Hingga Hari</label>
                <select class="select-form" id="HH" style="height: 48px;">
                    <option value="Mon">Senin</option>
                    <option value="Tue">Selasa</option>
                    <option value="Wed">Rabu</option>
                    <option value="Thu">Kamis</option>
                    <option value="Fri">Jum`at</option>
                    <option value="Sat">Sabtu</option>
                    <option value="Sun">Minggu</option>
                </select>
            </div>
        </div>
    </div>

    <div class="col-6 kanan">
        <div class="form-group w-100">
            <label for="MT">Mulai Tanggal</label>
            <input type="date" wire:model.lazy='TM' id="MT" class="form-control w-100">
        </div>

        <div class="form-group w-100">
            <label for="HT">Hingga Tanggal</label>
            <input type="date" wire:model.lazy='TA' id="HT" class="form-control w-100">
        </div>

        <div class="d-flex justify-content-end pe-5">
            <button class="btn btn-success d-flex justify-content-center align-items-center" style="width: 140px; height: 32px;">Unggah</button>
        </div>
    </div>
</form>