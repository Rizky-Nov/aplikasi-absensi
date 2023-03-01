<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/title.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/data-pengguna.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daftar-absensi.css') }}">
    <link rel="stylesheet" href="{{ asset('css/data-absen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    @stack('links')

    <livewire:styles />

    <title>{{ $title }} | Absensi</title>
</head>
<body style="background: #FFFFFF; padding-bottom: 48px">
    <div class="load-state" id="loader">
        <i class="fa-solid fa-spinner load-state-item"></i>
    </div>

    <div class="p-0 m-0" style="background: #4ca1af">
        @if (Request::is('profile/*'))
        @include('header')
            
        <div class="d-flex justify-content-end m-0 p-0 " style="background: #FFFFFF;  border-radius:36px 36px 0px 0px;">
            <div class="col-12 d-flex justify-content-start" style="padding: 36px 48px 36px 48px;">
                {{ $slot }}
            </div>
        </div>
    </div>
    
    @else
        @include('side-bar')
        @include('header')
        
        <div class="d-flex justify-content-end m-0 p-0 " style="background: #FFFFFF;  border-radius:36px 36px 0px 0px;">
            <div class="col-10 d-flex justify-content-start">
                {{ $slot }}
            </div>
        </div>
    </div>
    @endif

    <livewire:scripts />
    
    @stack('scripts')
    <script>
        const loader  = document.querySelector('#loader');
        setTimeout(() => {    
            loader.style.display = 'none';
        }, 2000);
    </script>
</body>
</html>