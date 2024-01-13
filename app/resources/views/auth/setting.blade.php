@extends('adminlte::page')

@section('title', 'Setting')

@section('content_header')
<div class="d-flex">
    @can('admin')
    <a href="{{ route('admin.home') }}" class="btn p-0">
        <h6>Beranda</h6>
    </a>
    @endcan
    
    @can('user')
    <a href="{{ route('user.home') }}" class="btn p-0">
        <h6>Beranda</h6>
    </a>
    @endcan

    <h6 class="pl-2 pr-2">/</h6>

    <a href="" class="btn p-0">
        <h6>Setting</h6>
    </a>
</div>
@stop

@section('content')
<div class="card p-3">
    <h5 class="text-bold">Setting</h5>

    <div class="col-md-6 mt-2">
        @if($msg = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $msg }} 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if($msg = Session::get('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ $msg }} 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul style="list-style: none" class="pl-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <h6 class="text-black-50">Ubah Password</h6>

        <form action="{{ route('setting.change') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="old_password" class="form-check-label">Password Lama</label>
                <input type="password" name="old_password" id="old_password" class="form-control">
            </div>
            <div class="form-group">
                <label for="new_password" class="form-check-label">Password Baru</label>
                <input type="password" name="new_password" id="new_password" class="form-control">
            </div>
            <div class="form-group">
                <label for="confirm_password" class="form-check-label">Konfirmasi Password Baru</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop
