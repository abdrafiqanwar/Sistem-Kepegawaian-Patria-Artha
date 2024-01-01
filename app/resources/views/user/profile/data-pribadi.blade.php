@extends('adminlte::page')

@section('title', 'Profile | Data Pribadi')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.data-pribadi') }}" class="btn p-0">
            <h6>Profil</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.data-pribadi') }}" class="btn p-0">
            <h6>Data Pribadi</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col">
            <div class="card p-3">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Profil</h5>
                    <a href="{{ route('user.biodata') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 10px">Ajukan Perubahan</a>
                </div>
                <img src="https://source.unsplash.com/random/150x150?sig=1" class="p-3 img-fluid"/>
                <a href="" class="btn btn-info pt-1 pb-1" style="font-size: 14px; fill: white">
                    Unggah Foto
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>
                </a>

                <div class="table-responsive">
                    <table class="table mt-2 mb-0" style="font-size: 14px">
                        <tr>
                            <td style="width: 35%">NIDN</td>
                            <td style="width: 5%">:</td>
                            <td>0902017708</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Nama</td>
                            <td style="width: 5%">:</td>
                            <td>SUHENDRA S</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Jenis Kelamin</td>
                            <td style="width: 5%">:</td>
                            <td>Laki-laki</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Tempat Lahir</td>
                            <td style="width: 5%">:</td>
                            <td>MALINO</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Tangal Lahir</td>
                            <td style="width: 5%">:</td>
                            <td>02 Januari 1977</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Nama Ibu Kandung</td>
                            <td style="width: 5%">:</td>
                            <td>Mumang</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-3">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Alamat dan Kontak</h5>
                    <a href="{{ route('user.alamat-kontak') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 10px; fill: white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table mt-2 mb-0" style="font-size: 14px">
                        <tr>
                            <td style="width: 35%">Email</td>
                            <td style="width: 5%">:</td>
                            <td>suhendra@patria-artha@ac.id</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Alamat</td>
                            <td style="width: 5%">:</td>
                            <td>Hartaco Blok I P13 Balang Baru</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">RT</td>
                            <td style="width: 5%">:</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">RW</td>
                            <td style="width: 5%">:</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Dusun</td>
                            <td style="width: 5%">:</td>
                            <td>(Tidak ada data)</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Desa/Kelurahan</td>
                            <td style="width: 5%">:</td>
                            <td>Balang Baru</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Kota/Kabupaten/Kecamatan</td>
                            <td style="width: 5%">:</td>
                            <td>Kota Makassar</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Provinsi</td>
                            <td style="width: 5%">:</td>
                            <td>Prov. Sulawesi Selatan</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Kode Pos</td>
                            <td style="width: 5%">:</td>
                            <td>90222</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">No. Telepon Rumah</td>
                            <td style="width: 5%">:</td>
                            <td>0411869761</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">No. HP</td>
                            <td style="width: 5%">:</td>
                            <td>082396319222</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card p-3">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Keluarga</h5>
                    <a href="{{ route('user.keluarga') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 10px; fill: white">
                        Ajukan Perubahan
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table mt-2 mb-0" style="font-size: 14px">
                        <tr>
                            <td style="width: 35%">Status Perkawinan</td>
                            <td style="width: 5%">:</td>
                            <td>Cerai</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Nama Suami/Istri</td>
                            <td style="width: 5%">:</td>
                            <td>Hasvivi Hasdin</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">NIP Suami/Istri</td>
                            <td style="width: 5%">:</td>
                            <td>(Tidak ada data)</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Pekerjaan Suami/Istri</td>
                            <td style="width: 5%">:</td>
                            <td>Tidak bekerja</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-3">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Kependudukan</h5>
                    <a href="{{ route('user.kependudukan') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 10px; fill: white">
                        Ajukan Perubahan
                    </a>
                </div>
                
                <div class="table-responsive">
                    <table class="table mt-2 mb-0" style="font-size: 14px">
                        <tr>
                            <td style="width: 35%">NIK</td>
                            <td style="width: 5%">:</td>
                            <td>3171100201770009</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Agama</td>
                            <td style="width: 5%">:</td>
                            <td>Islam</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Kewarganegaraan</td>
                            <td style="width: 5%">:</td>
                            <td>Indonesia</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card p-3">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Kepegawaian</h5>
                    <a href="{{ route('user.kepegawaian') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 10px; fill: white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table mt-2 mb-0" style="font-size: 14px">
                        <tr>
                            <td style="width: 35%">Program Studi</td>
                            <td style="width: 5%">:</td>
                            <td>Akuntansi</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">NIP (khusus PNS)</td>
                            <td style="width: 5%">:</td>
                            <td>(Tidak ada data)</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Status Kepegawaian</td>
                            <td style="width: 5%">:</td>
                            <td>NON PNS</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Status Keaktifan</td>
                            <td style="width: 5%">:</td>
                            <td>Aktif</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Nomor SK CPNS</td>
                            <td style="width: 5%">:</td>
                            <td>(Tidak ada data)</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">SK CPNS Terhitung Mulai Tanggal</td>
                            <td style="width: 5%">:</td>
                            <td>(Tidak ada data)</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Nomor SK TMMD</td>
                            <td style="width: 5%">:</td>
                            <td>(Tidak ada data)</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Tanggal Mulai Menjadi Dosen (TMMD)</td>
                            <td style="width: 5%">:</td>
                            <td>30 Januari 2012</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Pangkat/Golongan</td>
                            <td style="width: 5%">:</td>
                            <td>Penata - III/c</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Sumber Gaji</td>
                            <td style="width: 5%">:</td>
                            <td>Lainnya</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-3">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Bidang Keilmuan</h5>
                    <a href="{{ route('user.bidang-keilmuan') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 10px; fill: white">
                        Ajukan Perubahan
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table mt-2 mb-0" style="font-size: 14px">
                        <tr>
                            <td style="width: 35%">Kelompok Bidang</td>
                            <td style="width: 5%">:</td>
                            <td>(Tidak ada data)</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card p-3">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Lain-lain</h5>
                    <a href="{{ route('user.lain') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 10px; fill: white">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table mt-2 mb-0" style="font-size: 14px">
                        <tr>
                            <td style="width: 35%">NPWP</td>
                            <td style="width: 5%">:</td>
                            <td>853599538804000</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">Nama Wajib Pajak</td>
                            <td style="width: 5%">:</td>
                            <td>(Tidak ada data)</td>
                        </tr>
                        <tr>
                            <td style="width: 35%">SINTA ID</td>
                            <td style="width: 5%">:</td>
                            <td>6656565</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop