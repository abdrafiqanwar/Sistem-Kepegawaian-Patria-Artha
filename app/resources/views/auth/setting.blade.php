@extends('adminlte::page')

@section('title_prefix', 'Setting')

@section('content_header')
    @can('admin')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Setting</li>
        </ol>
    </nav>
    @endcan
    
    @can('user')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Setting</li>
        </ol>
    </nav>
    @endcan
@stop

@section('content')
<div class="card p-3">
    <h5 class="text-bold">Setting</h5>

    <div class="col-md-6 mt-2">
        <h6 class="text-black-50">Ubah Password</h6>

        <form action="{{ route('setting.change') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="old_password" class="form-check-label">Password Lama</label>
                <input type="password" name="old_password" id="old_password" class="form-control @error('old_password') is-invalid @enderror">
                @error('old_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="new_password" class="form-check-label">Password Baru</label>
                <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror">
                @error('new_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="confirm_password" class="form-check-label">Konfirmasi Password Baru</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror">
                @error('confirm_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    @if(Session::has('error'))
    toastr.options = {
        "closeButton" : true,
        "progressBar" : true
    }
    toastr.error("{{ Session::get('error') }}");
    @endif

    @if(Session::has('success'))
    toastr.options = {
        "closeButton" : true,
        "progressBar" : true
    }
    toastr.success("{{ Session::get('success') }}");
    @endif
</script>
@stop
