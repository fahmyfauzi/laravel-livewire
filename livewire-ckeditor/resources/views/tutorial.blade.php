@extends('layouts.app')

@push('style')
<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
    integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@livewireStyles
@endpush

@push('scripts')
@livewireScripts
@endpush

@section('content')
<div class="container">
    <h1>TUTORIAL CKEDITOR</h1>
    <hr>

    <div class="row">
        <div class="col-md-8">
            @livewire('my-editor')
        </div>
    </div>

</div>
@endsection