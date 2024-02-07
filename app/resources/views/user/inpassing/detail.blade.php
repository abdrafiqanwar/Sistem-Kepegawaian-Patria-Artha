@extends('adminlte::page')

@section('title_prefix', 'Inpassing')

@section('content_header')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.inpassing') }}">Profile</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.inpassing') }}">Inpassing</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail</li>
    </ol>
</nav>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Detail Inpassing</h5>
            <a href="{{ route('user.inpassing') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 border" style="font-size: 14px">
                <tr>
                    <th class="w-25">Golongan/Pangkat</th>
                    <td>Penata Muda Tk. I</td>
                </tr>
                <tr>
                    <th class="w-25">Nomor SK Inpassing</th>
                    <td>139/K9/KP.01/IMP/2018</td>
                </tr>
                <tr>
                    <th class="w-25">Tanggal SK</th>
                    <td>20 Februari 2018</td>
                </tr>
                <tr>
                    <th class="w-25">Terhitung Mulai Tanggal</th>
                    <td>01 Maret 2018</td>
                </tr>
                <tr>
                    <th class="w-25">Angkat Kredit</th>
                    <td>150.00</td>
                </tr>
                <tr>
                    <th class="w-25">Masa Kerja (Tahun)</th>
                    <td>0</td>
                </tr>
                <tr>
                    <th class="w-25">Masa Kerja (Bulan)</th>
                    <td>2</td>
                </tr>
            </table>
        </div>

        <p class="bg-secondary p-1 pl-2 font-weight-bold m-0" style="font-size: 14px">Dokumen</p>
        <div class="table-responsive">
            <table class="table table-bordered" style="font-size: 14px">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama File</th>
                    <th>Nama Dokumen</th>
                    <th>Keterangan</th>
                    <th>Jenis Dokumen</th>
                    <th>Tautan Dokumen</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>SK III-C 2023.pdf</td>
                    <td>SK III-C 2023</td>
                    <td>-</td>
                    <td>SK Pangkat/Inpassing</td>
                    <td>-</td>
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