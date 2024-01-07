@extends('adminlte::page')

@section('title', 'Profile | Jabatan Fungsional')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.jabatan-fungsional') }}" class="btn p-0">
            <h6>Profil</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.jabatan-fungsional') }}" class="btn p-0">
            <h6>Jabatan Fungsional</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Jabatan Fungsional</h5>
            <a href="" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-newspaper"></i>
                Riwayat Ajuan
            </a>
        </div>
        <div>
            <a href="{{ route('user.jabatan-fungsional.create') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah Jabatan
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 table-bordered" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th>Jabatan Fungsional</th>
                    <th>Nomor SK</th>
                    <th>Terhitung Mulai Tanggal</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>Lektor (300.00)</td>
                    <td>11226/LL9/KP/07/01/2023</td>
                    <td>01 Desember 2023</td>
                    <td class="text-center">
                        <a href="{{ route('user.jabatan-fungsional.detail') }}" class="btn btn-info" style="fill: white">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{ route('user.jabatan-fungsional.edit') }}" class="btn btn-warning" style="fill: white">
                            <i class="fas fa-pencil-alt" style="color: white"></i>
                        </a>
                        <a href="" class="btn btn-danger" style="fill: white">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop