@if (Request::is('profile'))
    <div class="luar container-fluid p-0 m-0">
        <div class="judul col-12 header-m p-0 m-0">
            <div class="col-6 d-flex">
                <div class="kembali col d-flex justify-content-center align-items-start">
                    <a href="/home" class="header-m text-neutral-10">Home</a>
                </div>
                <div class="nama col-10">
                    <p class="text-neutral-10 header-l">@yield('judul')</p>
                </div>
            </div>

            <div class="PL col-6">
                <div class="profile col d-flex justify-content-end">
                    <a href="/profile" class="kotak-profile d-flex justify-content-center align-items-center">
                        <img src="{{ asset('gambar/profile-contoh.jpg') }}" alt="">
                    </a>
                    <span href="/profile" class="header-s text-neutral-10 d-flex align-items-center" style="margin-left: 8px">Ini Adalah Nama Pengguna</span>
                </div>

                <div class="logout col-2 d-flex justify-content-end">
                    <a href="/logout">
                        <img src="{{ asset('icon/logout.png') }}" style="height: 30px; width: 30px; filter: invert(100%)" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="luar container-fluid p-0 m-0">
        <div class="col-2"></div>

        <div class="judul col-10 header-m p-0 m-0">
            <div class="nama col-6">
                <p class="text-neutral-10 header-l">@yield('judul')</p>
            </div>

            <div class="PL col-6">
                <div class="profile col d-flex justify-content-end">
                    <a href="/profile" class="kotak-profile d-flex justify-content-center align-items-center">
                        <img src="{{ asset('gambar/profile-contoh.jpg') }}" class="w-100 h-100" alt="">
                    </a>
                    <span href="/profile" class="header-s text-neutral-10 d-flex align-items-center" style="margin-left: 8px">Ini Adalah Nama Pengguna</span>
                </div>

                <div class="logout col-2 d-flex justify-content-end">
                    <a href="/logout">
                        <img src="{{ asset('icon/logout.png') }}" style="height: 30px; width: 30px; filter: invert(100%)" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif