@extends('adminlte::page')

@section('title', 'Kualifikasi | Pendidikan Formal')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.pendidikan-formal') }}" class="btn p-0">
            <h6>Kualifikasi</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.pendidikan-formal') }}" class="btn p-0">
            <h6>Pendidikan Formal</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Pendidikan Formal</h5>
            <a href="" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-newspaper"></i>
                Riwayat Ajuan
            </a>
        </div>
        <div>
            <a href="{{ route('user.pendidikan-formal.create') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 table-bordered" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th>No.</th>
                    <th>Jenjang</th>
                    <th>Gelar</th>
                    <th>Bidang Studi</th>
                    <th>Perguruan Tinggi</th>
                    <th>Tahun Lulus</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>S2</td>
                    <td>M.M.</td>
                    <td>Manajemen</td>
                    <td>Sekolah Tinggi Ilmu Manajemen Nitro Makassar</td>
                    <td>2011</td>
                    <td class="text-center">
                        <a href="{{ route('user.pendidikan-formal.detail') }}" class="btn btn-info" style="fill: white">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{ route('user.pendidikan-formal.edit') }}" class="btn btn-warning" style="fill: white">
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