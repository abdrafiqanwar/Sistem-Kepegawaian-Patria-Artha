@extends('adminlte::page')

@section('title', 'Data Dosen')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('admin.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('admin.data-user') }}" class="btn p-0">
            <h6>Data User</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="" class="btn p-0">
            <h6>Tambah</h6>
        </a>
    </div>
@stop

@section('content')
<div class="card p-3">
    <h5 class="text-bold">Tambah User</h5>

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

    <form action="{{ route('admin.data-user.store') }}" method="POST" class="mt-2">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName" class="font-weight-normal form-check-label">Nama</label>
                <input type="text" name="name" id="inputName" class="form-control" placeholder="Nama" value="{{ old('name') }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail" class="font-weight-normal form-check-label">Email</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="role" class="font-weight-normal form-check-label">Role</label>
                <select id="role" name="role" class="form-select w-100 form-control" aria-label="Small select example">
                    <option selected disabled>Pilih</option>
                    <option value="LECTURER">Dosen</option>
                    <option value="ADMIN">Admin</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword" class="font-weight-normal form-check-label">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="d-md-flex justify-content-md-end">
            <a href="{{ route('admin.data-user') }}" class="btn btn-outline-danger mr-md-2">Batal</a>
            <button type="submit" class="btn btn-primary">Konfirmasi</button>
        </div>
    </form>
</div>
@stop

@section('css')
@stop

@section('js')
@stop
