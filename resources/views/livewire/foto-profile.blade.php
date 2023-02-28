<div wire:poll.3000ms class="col-6 d-flex justify-content-end align-items-center h-100">
    <a href="javascript:history.back()/{{ auth()->user()->profile->id }}">  
        
        @if (auth()->user()->profile->foto == null)
            <p class="kotak-profile me-2 header-m">P</p>
        @else
            <img src="{{ asset('storage/' . auth()->user()->profile->foto) }}" class="kotak-profile me-2" alt="">
        @endif

        {{-- <img src="{{ asset('gambar/profile-contoh.jpg') }}" class="kotak-profile me-2" alt=""> --}}
    </a>

    <span class="header-s text-neutral-10">{{ auth()->user()->email }}</span>
</div>

@push('scripts')
    <script>
      Livewire.on('aploud', function () {
          Livewire.emit('fresh');
          // console.log('aploudadasdajsdyasdmasjdkashuydtsahgvanbsdvsajdfyh');
      })
    </script>
@endpush