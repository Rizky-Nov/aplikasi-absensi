<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> --}}

    <title>Login | Absensi</title>
</head>
<body>
    <div class="col-12 d-flex justify-content-center align-items-center" style="position: absolute; height: 100vh;">
        <div class="kotak-luar-login col-8 d-flex flex-column">
            <div class="d-flex col-8 justify-content-center" style="position: absolute; border-radius: 12px;">
                <div class="kotak-kiri-login col-6">
                    <h1 style="color: #FFFFFF"></h1>
                </div>
    
                <div class="kotak-kanan-login col-6">
                    <div class="col-8 d-flex flex-column align-items-center justify-content-center">
                        {{-- @if (session()->has('loginerror'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginerror') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif --}}

                        <p><h2>Login</h2></p>

                        <form action="/login" method="POST" class="input-login w-100">
                            @csrf
                            <div class="form-group w-100">
                              <label for="email">Email</label>
                              <input autofocus required type="text" name="email" id="email" class="form-control w-100" placeholder="masukkan email">
                            </div>                            
                            <div class="form-group w-100">
                              <label for="password">Password</label>
                              <input required type="password" name="password" id="password" class="form-control w-100" placeholder="masukkan password">
                            </div>
                        
                            <div>
                                <button class="w-100 btn btn-success">Login</button>
                            </div>
                        </form>

                        <span style="font-size: 12px; margin-top: 8px">Silahkan Buat Akun, Jika Belum Punya | 
                            <a href="/register" class="text-decoration-none" style="color: #4ca1af; font-size: 13px">Sign Up</a></span>
                    </div>
                </div>
            </div>

            <div class="col-12 h-50" style="background: #FFFFFF; border-radius: 12px 12px 0 0;"></div>
            <div class="col-12 h-50" style="background: #4ca1af; border-radius: 0 0 12px 12px;"></div>
        </div>
    </div>


    <div class="p-0 m-0 d-flex flex-column" style="height: 100vh; width: 100vw; gap: 0px">
        <div class="col-12 d-flex flex-column justify-content-start h-50">
            <img src="{{ asset('gambar/coba-2.png') }}" class="w-100 h-50"  alt="">
        </div>
    
        <div class="col-12 d-flex flex-column justify-content-end h-50">
            <img src="{{ asset('gambar/coba-1.png') }}" class="w-100 h-50"  alt="">
        </div>
    </div>
</body>
</html>