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
            
            <div class="col-6 h-100 d-flex align-items-end flex-column">
                <div class="d-flex col-12 p-0 m-0 h-100">
                    <div class="col-12 d-flex justify-content-center align-items-center h-100 w-100">
                        
                        <livewire:foto-profile />

                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="luar col-12">
        <div class="col-2"></div>

        <div class="judul col-10 h-100 m-0 p-0">
            <div class="nama col-6 h-100">
                <p class="text-neutral-10 header-l">@yield('judul')</p>
            </div>
            
            <div class="col-6 d-flex align-items-end flex-column">
                <div class="d-flex col-12 p-0 m-0 h-100">
                    <div class="col-12 h-100 d-flex justify-content-center align-items-center w-100">
                        <div class="col-6 d-flex justify-content-end align-items-center h-100">
                            <a wire:poll href="/profile/{{ auth()->user()->profile->id }}">
                                @if (auth()->user()->profile->foto == null)
                                <p class="kotak-profile me-2 header-m">P</p>
                                @else
                                <img src="{{ asset('storage/' . auth()->user()->profile->foto) }}" class="kotak-profile me-2" alt="">
                                @endif

                                {{-- <img src="{{ asset('gambar/profile-contoh.jpg') }}" class="kotak-profile me-2" alt=""> --}}
                            </a>
                
                            @if (auth()->user()->profile->nama_lengkap == null)
                                <span></span>
                            @else
                                <span class="header-s text-neutral-10">{{ auth()->user()->profile->nama_lengkap }}</span>
                            @endif
                        </div>

                        <div class="col-6 d-flex justify-content-end h-100">
                            <div class="d-flex flex-column me-5 pt-3">
                                <a class="apaini text-m-medium text-neutral-10 cursor-pointer pe-2" data-bs-toggle="collapse" data-bs-target="#dropdown-menu-logout">
                                    <i class="fa-solid fa-ellipsis-vertical d-flex justify-content-end w-100 me-5" style="font-size: 20px;" aria-hidden="true"></i>
                                </a>
                    
                                <div class="logout collapse mt-2 {{ Request::is('logout') ? 'show' : '' }}" id="dropdown-menu-logout">
                                    <a href="/logout" 
                                    class="text-m-regular text-neutral-10">Log-Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif