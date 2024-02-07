@extends('adminlte::page')

@section('title_prefix', 'Inpassing')

@section('content_header')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="">Profile</a></li>
        <li class="breadcrumb-item active" aria-current="page">Inpassing</li>
    </ol>
</nav>
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