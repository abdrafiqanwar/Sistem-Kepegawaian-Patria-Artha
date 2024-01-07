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
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Sertifikasi</h5>
            <a href="" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-newspaper"></i>
                Riwayat Ajuan
            </a>
        </div>
        <div>
            <a href="#collapseExample" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah
            </a>
        </div>

        <div class="table-responsive">
            <div class="collapse position-absolute mt-2" id="collapseExample">
                <div class="card p-3">
                    <a href="{{ route('user.sertifikasi.createDosen') }}" class="btn mb-2 font-weight-bold bg-secondary" style="font-size: 14px">Sertifikasi Dosen</a>
                    <a href="{{ route('user.sertifikasi.createProfesi') }}" class="btn font-weight-bold bg-secondary" style="font-size: 14px">Sertifikasi Profesi</a>
                </div>
            </div>
            <table class="table mt-2 table-bordered" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th>No.</th>
                    <th>Jenis Sertifikasi</th>
                    <th>Bidang Studi</th>
                    <th>No. Registrasi Pendidik</th>
                    <th>No. SK</th>
                    <th>Tahun Sertifikasi</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Sertifikasi Dosen</td>
                    <td>Manajemen</td>
                    <td>19109104702073</td>
                    <td>1900100200368</td>
                    <td>2019</td>
                    <td class="text-center">
                        <a href="{{ route('user.sertifikasi.detailDosen') }}" class="btn btn-info" style="fill: white">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{ route('user.sertifikasi.editDosen') }}" class="btn btn-warning" style="fill: white">
                            <i class="fas fa-pencil-alt" style="color: white"></i>
                        </a>
                        <a href="" class="btn btn-danger" style="fill: white">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Sertifikasi Profesi</td>
                    <td>Manajemen</td>
                    <td>19109104702073</td>
                    <td>1900100200368</td>
                    <td>2019</td>
                    <td class="text-center">
                        <a href="{{ route('user.sertifikasi.detailProfesi') }}" class="btn btn-info" style="fill: white">
                            <i class="fas fa-info-circle"></i>
                        </a>
                        <a href="{{ route('user.sertifikasi.editProfesi') }}" class="btn btn-warning" style="fill: white">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@stop