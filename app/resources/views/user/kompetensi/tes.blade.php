@extends('adminlte::page')

@section('title', 'Kompetensi | Tes')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.tes') }}" class="btn p-0">
            <h6>Kompetensi</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.tes') }}" class="btn p-0">
            <h6>Tes</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Tes</h5>
            <a href="" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-newspaper"></i>
                Riwayat Ajuan
            </a>
        </div>
        <div>
            <a href="{{ route('user.tes.create') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 table-bordered" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th>No.</th>
                    <th>Nama Tes</th>
                    <th>Skor Tes</th>
                    <th>Jenis Tes</th>
                    <th>Penyelenggara</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Tes Kompetensi Dasar Akademik (TKDA)</td>
                    <td>516.00</td>
                    <td>TKDA Himpsi</td>
                    <td>Pusat Layanan Tes Indonesia bekerja sama dengan Himpunan Psikologi Indonesia</td>
                    <td>2019</td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop