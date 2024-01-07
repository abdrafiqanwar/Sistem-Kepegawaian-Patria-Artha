@extends('adminlte::page')

@section('title', 'Beranda')

@section('content_header')
    <a href="{{ route('user.home') }}" class="btn p-0">
        <h6>Beranda</h6>
    </a>
@stop

@section('content')
    <div class="card">
        <div class="d-flex flex-wrap">
            <img src="https://source.unsplash.com/random/150x150?sig=1" class="rounded-circle p-3 img-fluid"/>
            <div class="flex-row mt-auto mb-auto p-3">
                <h4 class="text-bold">Selamat Datang</h4>
                <h4 class="text-bold">Suhendra S</h4>
                <div class="d-flex">
                    <p>Universitas Patria Artha</p>
                    <p class="pl-2 pr-2">-</p>
                    <p>Fakultas Ekonomi</p>
                    <p class="pl-2 pr-2">-</p>
                    <p>Manajemen</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="row p-3">
            <div class="col">
                <h5 class="text-bold">Data Pokok</h5>
                <p style="font-size: 12px">Jika ingin mengubah data, silahkan lakukan melalui menu terkait</p>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered" style="border: 1px solid black; font-size: 14px;">
                        <tr>
                            <th class="border-0">NIK</th>
                            <td class="border-0">7371100201770009</td>
                        </tr>
                        <tr>
                            <th class="border-0">Tanggal Lahir</th>
                            <td class="border-0">2 Jan 1977</td>
                        </tr>
                        <tr>
                            <th class="border-0">NIDN/NIDK</th>
                            <td class="border-0">
                                0902017708
                                <br>
                                Tanggal mulai menjadi dosen: 30 Jan 2012
                            </td>
                        </tr>
                        <tr>
                            <th class="border-0">NIP</th>
                            <td class="border-0">12345678</td>
                        </tr>
                        <tr>
                            <th class="border-0">Jabatan</th>
                            <td class="border-0">
                                Lektor
                                <br>
                                Tanggal mulai: 1 Des 2023
                            </td>
                        </tr>
                        <tr>
                            <th class="border-0">Kepangkatan</th>
                            <td class="border-0">
                                Penata - III/c
                                <br>
                                Tanggal mulai: 1 Jan 2024
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-1 col-lg-1"></div>

            <div class="col">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Pendidikan Terakhir</h5>
                    <a href="{{ route('user.pendidikan-formal') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 10px">Selengkapnya</a>
                </div>
                <p style="font-size: 12px; visibility: hidden;">hehe</p>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered" style="border: 1px solid black; font-size: 14px;">
                        <tr>
                            <th class="border-0">Jenjang Pendidikan</th>
                            <td class="border-0">S2</td>
                        </tr>
                        <tr>
                            <th class="border-0">Bidang Studi</th>
                            <td class="border-0">Manajemen</td>
                        </tr>
                        <tr>
                            <th class="border-0">Perguruan Tinggi</th>
                            <td class="border-0">Sekolah Tinggi Ilmu Manajemen Nitro Makassar</td>
                        </tr>
                        <tr>
                            <th class="border-0">Tahun Lulus</th>
                            <td class="border-0">2011</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row p-3">
            <div class="col">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Status Serdos</h5>
                    <a href="" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 10px">Selengkapnya</a>
                </div>
                <p style="font-size: 12px;">Untuk informasi lebih lanjut bisa menghubungi PSD-PTU Perguruan Tinggi masing-masing atau cek PO Serdos</p>

                <div class="table-responsive">
                    <table class="table table-hover table-bordered" style="border: 1px solid black; font-size: 14px;">
                        <tr>
                            <th class="border-0" style="width: 40%">Bidang Studi</th>
                            <td class="border-0">Manajemen</td>
                        </tr>
                        <tr>
                            <th class="border-0" style="width: 40%">No. Registrasi Pendidik</th>
                            <td class="border-0">19109104702073</td>
                        </tr>
                        <tr>
                            <th class="border-0" style="width: 40%">No. SK</th>
                            <td class="border-0">1900100200368</td>
                        </tr>
                        <tr>
                            <th class="border-0" style="width: 40%">Tahun Sertifikasi</th>
                            <td class="border-0">2019</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-md-1 col-lg-1"></div>
            <div class="col"></div>
        </div>
    </div>

    <div class="card p-3">
        <h4 class="text-bold">Riwayat Perubahan Data Dosen</h4>

        <div class="table-responsive">
            <table class="table table-hover" style="font-size: 14px;">
                <tr>
                    <th>Jenis PDD</th>
                    <th>Jenis Ajuan</th>
                    <th>Tanggal Ajuan</th>
                    <th>Tanggal Verifikasi</th>
                    <th>Umur Ajuan (Hari)</th>
                    <th>Status Ajuan</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>Pendidikan Formal</td>
                    <td>Ajuan Update Data</td>
                    <td>12 Maret 2019</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-info">
                            <i class="fas fa-info-circle"></i>
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