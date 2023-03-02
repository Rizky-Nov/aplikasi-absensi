{{-- @push('scripts') --}}
    <script>
        let toastColor = {
            'success' : 'linear-gradient(to right, #00ff87, #60efff)',
            'warning' : 'linear-gradient(to right, #e89d1f, #e4e95d)',
            'danger' : 'linear-gradient(to right, #ea5753, #ffb88e)',
            'primary' : '',
            'secondary' : ''
        }
        Livewire.on('toastify', function (params) {
            let [color = "primary", text = 'Parameter Kosong', timer = 2500] = params;
            Toastify({
                text: text,
                duration: timer,
                newWindow: true,
                stopOnFocus: true,
                className: 'text-l-medium rounded mt-5 me-5',

                style: {
                    background: toastColor[color],
                },
                onClick: function(){} // Callback after click
            }).showToast();
            Livewire.emit('fresh');
        });
    </script>
{{-- @endpush --}}