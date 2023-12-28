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

        <h6 class="pl-2 pr-2">/</h6>

        <a href="" class="btn p-0">
            <h6>Detail</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Detail Pendidikan Formal</h5>
            <a href="{{ route('user.pendidikan-formal') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 border" style="font-size: 14px">
                <tr>
                    <th class="w-25">Jenjang Studi</th>
                    <td>S1</td>
                </tr>
                <tr>
                    <th class="w-25">Gelar Akademik</th>
                    <td>S.E.</td>
                </tr>
                <tr>
                    <th class="w-25">Bidang Studi</th>
                    <td>*</td>
                </tr>
                <tr>
                    <th class="w-25">Perguruan Tinggi</th>
                    <td>Sekolah Tinggi Ilmu Manajemen Nitro Makassar</td>
                </tr>
                <tr>
                    <th class="w-25">Program Studi</th>
                    <td>Manajemen</td>
                </tr>
                <tr>
                    <th class="w-25">Tahun Masuk</th>
                    <td>0</td>
                </tr>
                <tr>
                    <th class="w-25">Tahun Lulus</th>
                    <td>2000</td>
                </tr>
                <tr>
                    <th class="w-25">Tanggal Kelulusan</th>
                    <td>(Tidak ada data)</td>
                </tr>
                <tr>
                    <th class="w-25">Nomor Induk Mahasiswa</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th class="w-25">Jumlah Semester Tempuh</th>
                    <td>(Tidak ada data)</td>
                </tr>
                <tr>
                    <th class="w-25">Jumlah SKS Kelulusan</th>
                    <td>(Tidak ada data)</td>
                </tr>
                <tr>
                    <th class="w-25">IPK Kelulusan</th>
                    <td>(Tidak ada data)</td>
                </tr>
                <tr>
                    <th class="w-25">Nomor SK Penyetaraan</th>
                    <td>(Tidak ada data)</td>
                </tr>
                <tr>
                    <th class="w-25">Tanggal SK Penyetaraan</th>
                    <td>(Tidak ada data)</td>
                </tr>
                <tr>
                    <th class="w-25">Nomor Ijazah</th>
                    <td>(Tidak ada data)</td>
                </tr>
                <tr>
                    <th class="w-25">Judul Tesis/Disertasi</th>
                    <td>(Tidak ada data)</td>
                </tr>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop