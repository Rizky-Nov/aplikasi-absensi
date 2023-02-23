@if (Request::is('profile*'))
    <div class="luar container-fluid p-0 m-0">
        <div class="judul col-12 header-m p-0 m-0">
            <div class="col-6 d-flex">
                <div class="kembali col d-flex justify-content-center align-items-start">
                    <a href="/home" class="header-s text-neutral-10">Home</a>
                </div>
                <div class="nama col-10">
                    <p class="text-neutral-10 header-l">@yield('judul')</p>
                </div>
            </div>
            <div class="col d-flex align-items-end flex-column">
                <div class="PL col-7 me-4 d-flex p-0 m-0 h-100">
                    <div class="w-100" style="position: relative;">
                        <a href="/home">
                            <img src="{{ asset('gambar/profile-contoh.jpg') }}" class="kotak-profile me-2" alt="">
                        </a>            
                        <a class="apaini text-m-medium text-neutral-10 w-100">
                            <span class="header-s text-neutral-10">Ini Adalah Nama Pengguna</span>
                        </a>
                    </div>
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
            <div class="col d-flex align-items-end flex-column">
                <div class="PL col-7 me-4 d-flex p-0 m-0 h-100">
                    <div class="w-100" style="position: relative;">
                        <a href="/profile/{{ auth()->user()->profile->id }}">
                            <img src="{{ asset('gambar/profile-contoh.jpg') }}" class="kotak-profile me-2" alt="">
                        </a>
            
                        <span class="header-s text-neutral-10">Ini Adalah Nama Pengguna</span>

                        <a class="apaini text-m-medium text-neutral-10 cursor-pointer" data-bs-toggle="collapse" data-bs-target="#dropdown-menu-logout">
                            <i class="fa-solid fa-ellipsis-vertical ms-3" style="font-size: 20px; width: 30px" aria-hidden="true"></i>
                        </a>
            
                        <div class="logout w-100 collapse  {{ Request::is('logout') ? 'show' : '' }}" style="margin-right: 36px; position: absolute" id="dropdown-menu-logout">
                            <a href="/logout" 
                            class="text-m-regular w-100 d-flex justify-content-end text-neutral-10" 
                            style="padding-right: 48px">Log-Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif