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
                <i class="fas fa-arrow-left"></i>
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