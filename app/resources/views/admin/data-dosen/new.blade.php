@extends('adminlte::page')

@section('title', 'Data Dosen')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('admin.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>
    
        <h6 class="pl-2 pr-2">/</h6>
    
        <a href="{{ route('admin.data-dosen') }}" class="btn p-0">
            <h6>Data Dosen</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>
    
        <a href="" class="btn p-0">
            <h6>Tambah</h6>
        </a>
    </div>
@stop

@section('content')
<div class="card p-3">
    <h5 class="text-bold">Tambah Dosen</h5>

    <form action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName" class="font-weight-normal">Nama Dosen</label>
                <input type="text" name="" id="inputName" class="form-control" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail" class="font-weight-normal">Email</label>
                <input type="email" name="" id="inputEmail" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword" class="font-weight-normal">Password</label>
                <input type="password" name="" id="inputPassword" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="d-md-flex justify-content-md-end">
            <a href="{{ route('admin.data-dosen') }}" class="btn btn-outline-danger mr-md-2">Batal</a>
            <button type="submit" class="btn btn-primary">Konfirmasi</button>
        </div>
    </form>
</div>
@stop

@section('css')
@stop

@section('js')
@stop