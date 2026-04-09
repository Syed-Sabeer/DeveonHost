@if(session('success') || session('error') || session('warning') || session('info') || $errors->any())
<script>
    (function () {
        var icon = 'success';
        var title = 'Success';
        var text = '';

        @if(session('error'))
            icon = 'error';
            title = 'Error';
            text = @json(session('error'));
        @elseif(session('warning'))
            icon = 'warning';
            title = 'Warning';
            text = @json(session('warning'));
        @elseif(session('info'))
            icon = 'info';
            title = 'Info';
            text = @json(session('info'));
        @elseif($errors->any())
            icon = 'error';
            title = 'Validation Error';
            text = @json($errors->first());
        @elseif(session('success'))
            icon = 'success';
            title = 'Success';
            text = @json(session('success'));
        @endif

        if (window.Swal && text) {
            Swal.fire({
                icon: icon,
                title: title,
                text: text,
                confirmButtonColor: '#0d5ef4'
            });
        }
    })();
</script>
@endif
