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

        <h6 class="pl-2 pr-2">/</h6>

        <a href="" class="btn p-0">
            <h6>Detail</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Detail Jabatan Fungsional</h5>
            <a href="{{ route('user.jabatan-fungsional') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 border" style="font-size: 14px">
                <tr>
                    <th class="w-25">Jabatan Fungsional</th>
                    <td>Lektor 300.00</td>
                </tr>
                <tr>
                    <th class="w-25">Nomor SK</th>
                    <td>11226/LL9/KP.07.01/2023</td>
                </tr>
                <tr>
                    <th class="w-25">Terhitung Mulai Tanggal</th>
                    <td>1 Desember 2023</td>
                </tr>
            </table>
        </div>

        <p class="bg-secondary p-1 pl-2 font-weight-bold m-0" style="font-size: 14px">Dokumen</p>
        <div class="table-responsive">
            <table class="table table-bordered" style="font-size: 14px">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama File</th>
                    <th>Jenis Dokumen</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>SK Jafung Lektor.pdf</td>
                    <td>SK Jabatan Fungsional</td>
                    <td>
                        <a href="" class="" style="fill: cornflowerblue; color: cornflowerblue; font-size: 14px">
                            <i class="fas fa-search"></i>
                            Lihat Dokumen
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