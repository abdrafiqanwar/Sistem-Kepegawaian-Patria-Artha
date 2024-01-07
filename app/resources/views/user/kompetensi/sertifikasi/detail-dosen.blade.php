@extends('adminlte::page')

@section('title', 'Kompetensi | Sertifikasi')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.sertifikasi') }}" class="btn p-0">
            <h6>Kompetensi</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.sertifikasi') }}" class="btn p-0">
            <h6>Sertifikasi</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="" class="btn p-0">
            <h6>Detail Sertifikasi Dosen</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Detail Sertifikasi Dosen</h5>
            <a href="{{ route('user.sertifikasi') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 border" style="font-size: 14px">
                <tr>
                    <th class="w-25">Jenis Sertifikasi</th>
                    <td>Sertifikasi Dosen</td>
                </tr>
                <tr>
                    <th class="w-25">Bidang Studi</th>
                    <td>Manajemen</td>
                </tr>
                <tr>
                    <th class="w-25">No. SK Sertifikasi</th>
                    <td>Manajemen</td>
                </tr>
                <tr>
                    <th class="w-25">Tahun Sertifikasi</th>
                    <td>Manajemen</td>
                </tr>
                <tr>
                    <th class="w-25">Nomor Peserta</th>
                    <td>Manajemen</td>
                </tr>
                <tr>
                    <th class="w-25">No. Registrasi</th>
                    <td>Manajemen</td>
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