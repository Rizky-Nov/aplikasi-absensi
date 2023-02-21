<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/side-bar.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <style>
        .awal {
            top: 0;
            right: 0;
        }
        .admin {
            top: 0;
            left: 0;

            animation: geserkiri 1s;
        }
        .user {
            top: 0;
            right: 0;

            animation: geserkanan 1s;
        }

        @keyframes geserkiri {
            0% {
                transform: translateX(450px)
            }
            100% {}
        }

        @keyframes geserkanan {
            0% {
                transform: translateX(-450px)
            }
            100% {}
        }
    </style>

    <livewire:styles />

    <title>Sign Up | Absensi</title>
</head>
<body>
    <div class="col-12 d-flex justify-content-center align-items-center" style="position: absolute; height: 100vh;">
        <div class="position-relative" style="width: 900px">
            <div class="kotak-luar-sign-up w-100">
                <div class="kotak-kiri-sign-up col-6 h-100">
                    <div class="col-8 d-flex flex-column align-items-center justify-content-center" style="gap: 8px">
                        <span class="header-m text-neutral-100">Sign Up</span>
                        <span class="header-s text-neutral-100">-- User --</span>
    
                        <div class="separator w-100"></div>

                        <livewire:create-user />
    
                        <a class="cursor-pointer text-decoration-none" id="changer">Admin</a>
                    </div>
                </div>
    
                <div class="kotak-kanan-sign-up col-6 h-100">
                    <div class="col-8 d-flex flex-column align-items-center justify-content-center" style="gap: 8px">
                        <span class="header-m text-neutral-100">Sign Up</span>
                        <span class="header-s text-neutral-100">-- Admin --</span>
    
                        <div class="separator w-100"></div>
    
                        <livewire:create-admin />
                        
                        <a class="cursor-pointer text-decoration-none" id="changer">User</a>
                    </div>
                </div>
            </div>

            <div class="col-6 awal" id="kotak" style="background: #4ca1af; height: 540px; border-radius: 12px; position: absolute">
                
            </div>
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

    <script>
        const buttonChanger = document.querySelectorAll('#changer');

        buttonChanger.forEach(item => {
            item.addEventListener('click', function () {

                const kotak = document.querySelector('#kotak');

                if (kotak.classList.contains('awal')) {
                    kotak.classList.toggle('admin');
                    kotak.classList.remove('awal');
                } else {
                    kotak.classList.toggle('admin');
                    kotak.classList.toggle('user');
                }
            });
        });
    </script>

    <livewire:scripts />
</body>
</html>