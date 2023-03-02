    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/side-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    @if (auth()->user()->role->nama_role == 'admin')
        <div class="side-bar-luar col-2 h-100 position-fixed">
            <div class="side-bar h-100 w-100">
                <div class="w-100" style="padding: 14px">
                    <div class="logo w-100">
                        <img src="{{ asset('icon/Icon2.png') }}" style="width: 64px; height: 64px;" alt="">
                    </div>
                        <div class="separator w-100"></div>
                    </div>
        
                <div class="untuk-menu w-100 " style="padding-left: 14px">
                    <div class="menus-luar w-100 h-100">
                        <a href="/home" class="text-m-medium text-neutral-10 w-100 {{ Request::is('home') ? 'active' : '' }}" style="gap: 8px;">
                            <img src="{{ asset('icon/home.png') }}" class="icon">Dashboard</a>
        
                        <a href="/data-pengguna" class="text-m-medium text-neutral-10 w-100 {{ Request::is('data-pengguna') ? 'active' : '' }}" style="gap: 8px;">
                            <img src="{{ asset('icon/profile.png') }}" class="icon"> Data Pengguna</a>
        
                        <a href="/daftar-absensi" class="text-m-medium text-neutral-10 w-100 {{ Request::is('daftar-absensi') ? 'active' : '' }}" style="gap: 8px;">
                            <img src="{{ asset('icon/absent.png') }}" class="icon">Absensi</a>
        
                        <div class="flex-column w-100" style="position: relative;">
                            <a class="text-m-medium text-neutral-10 w-100 cursor-pointer"style="gap: 8px;" data-bs-toggle="collapse" data-bs-target="#dropdown-menu">
                                <img src="{{ asset('icon/list-1.png') }}" class="icon">
                                <span class="w-50">Data Absensi</span>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
        
                            <div class="w-100 collapse {{ Request::is('absen-harian') || Request::is('absen-bulanan') ? 'show' : '' }}" id="dropdown-menu">
                                    <a href="/absen-harian" 
                                    class="text-m-regular text-neutral-10 {{ Request::is('absen-harian') ? 'active' : '' }}" 
                                    style="margin-top: 12px; padding-left: 56px">Absen Hari Ini</a>
                                    
                                    <a href="/absen-bulanan" 
                                    class="text-m-regular text-neutral-10 {{ Request::is('absen-bulanan') ? 'active' : '' }}" 
                                    style="margin-top: 12px; padding-left: 56px">Absensi</a>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="side-bar-luar col-2 h-100 position-fixed">
            <div class="side-bar h-100 w-100">
                <div class="w-100" style="padding: 14px">
                    <div class="logo w-100">
                        <img src="{{ asset('icon/Icon2.png') }}" style="width: 36px; height: 36px;" alt="">
                    </div>
            
                    <div class="separator w-100"></div>
                </div>
        
                <div class="untuk-menu w-100 " style="padding-left: 14px">
                    <div class="menus-luar w-100 h-100">
                        <a href="/home" class="text-m-regular text-neutral-10 w-100 {{ Request::is('home') ? 'active' : '' }}" style="gap: 8px;">
                            <img src="{{ asset('icon/home.png') }}" class="icon">Dashboard</a>
        
                        <a href="/data-pengguna" class="text-m-regular text-neutral-10 w-100 {{ Request::is('data-pengguna') ? 'active' : '' }}" style="gap: 8px;">
                            <img src="{{ asset('icon/profile.png') }}" class="icon"> Data Pengguna</a>
        
                        <a href="/daftar-absensi" class="text-m-regular text-neutral-10 w-100 {{ Request::is('daftar-absensi') ? 'active' : '' }}" style="gap: 8px;">
                            <img src="{{ asset('icon/absent.png') }}" class="icon">Absensi</a>
        
                        <a href="/data-absen" class="text-m-regular text-neutral-10 w-100 {{ Request::is('data-absen') ? 'active' : '' }}" style="gap: 8px;">
                            <img src="{{ asset('icon/list-1.png') }}" class="icon"> Data Absensi</a>
                    </div>
                </div>
            </div>
        </div>
    @endif