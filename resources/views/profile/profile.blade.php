    @section('judul')
    Profile
    @endsection

<x-title title="Profile">
  <div class="col-12 d-flex flex-column">

    <livewire:profile :profile="$profile"/>

    @can('IsAdmin')
    <div class="col-12 d-flex flex-column align-items-center" style="margin-top: 100px">
      <div class="col-12 d-flex flex-column" style="gap: 24px">
        <div class="separator w-100"></div>

        <div class="d-flex flex-column align-items-center">
          <span class="header-m text-neutral-100">Buat Kelas</span>
          <span class="text-s-medium text-neutral-80">Kelas ini dibuat untuk user melakukan Sign-Up menggunakan kode kelas !</span>
        </div>
          <livewire:create-kelas :kelas="auth()->user()->kelas"/>
        
      </div>
    </div>
        @endcan
  </div>

  @if (session()->has('berhasil'))
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          setTimeout(() => {
              Livewire.emit('toastify', ['success', {{ session('berhasil') }}, 3500]);
          }, 500);
      });
    </script>
  @endif
</x-title>