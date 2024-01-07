@extends('adminlte::page')

@section('title', 'Profile | Inpassing')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.inpassing') }}" class="btn p-0">
            <h6>Profil</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.inpassing') }}" class="btn p-0">
            <h6>Inpassing</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <h5 class="text-bold">Inpassing</h5>
        <div>
            <a href="{{ route('user.inpassing.create') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered mt-2" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th>No.</th>
                    <th>Pangkat/Golongan</th>
                    <th>Nomor SK</th>
                    <th>Tanggal SK</th>
                    <th>Terhitung Mulai Tanggal</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Penata Muda Tk. I</td>
                    <td>139/K9/KP.01/IMP/2018</td>
                    <td>20 Februari 2018</td>
                    <td>01 Maret 2018</td>
                    <td class="text-center">
                        <a href="{{ route('user.inpassing.detail') }}" class="btn btn-info" style="fill: white">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{ route('user.inpassing.edit') }}" class="btn btn-warning" style="fill: white">
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