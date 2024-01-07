@extends('adminlte::page')

@section('title', 'Pelaksana Penelitian | Penelitian')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.penelitian') }}" class="btn p-0">
            <h6>Pelaksana Kegiatan</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.penelitian') }}" class="btn p-0">
            <h6>Penelitian</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <h5 class="text-bold">Penelitian</h5>
        <div>
            <a href="{{ route('user.penelitian.create') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 table-bordered" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Bidang Keilmuan</th>
                    <th>Tahun Pelaksanaan</th>
                    <th>Lama Kegiatan</th>
                    <th>Rubrik BKD</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Penjaringan Penyamaan Persepsi Kajian Akademis Tentang Biaya Kerugian Lingkungan Provinsi Kalimantan Utara</td>
                    <td>1. [281305] Ekonomi - Akuntansi - Akuntansi Sektor Publik</td>
                    <td>2021/2022</td>
                    <td>1 Tahun</td>
                    <td>Kategori Kegiatan Tidak Sesuai dengan PO KBD 2021</td>
                    <td class="text-center">
                        <a href="{{ route('user.penelitian.detail') }}" class="btn btn-info" style="fill: white">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{ route('user.penelitian.edit') }}" class="btn btn-warning" style="fill: white">
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