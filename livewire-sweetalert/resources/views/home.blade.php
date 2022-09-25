@extends('layouts.app')

@push('styles')
@livewireStyles
@endpush

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@livewireScripts
<script>
    Livewire.on('success', data => {
    console.log(data.pesan);
    // var toastLiveExample = document.getElementById('liveToast')
    // var toast = new bootstrap.Toast(toastLiveExample)
    // document.getElementById('alert-message').innerHTML = data.pesan
    // toast.show()

    Swal.fire({
    title: 'Ini adalah notification!',
    text: data.pesan,
    icon: 'success',
    confirmButtonText: 'Cool'
    })
})
</script>

@endpush

@section('content')
<div class="container">
    <h1>Laravel Livewire</h1>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="alert-message">

            </div>
        </div>
    </div>
    @livewire('tutorial')
</div>
@endsection