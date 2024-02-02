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
                    <a href="{{ route('user.biodata') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px">Ajukan Perubahan</a>
                </div>
                @if(auth()->user()->profile_image_path)
                <div class="text-center">
                    <img src="{{ asset('file_path/profile/data_pribadi/'.auth()->user()->profile_image_path) }}" class="p-3 img-fluid" style="width: 200px; height: 200px"/>
                </div>
                @else
                <div class="text-center">
                    <img src="{{ asset('img/user.jpg') }}" class="p-3 img-fluid" style="width: 200px; height: 200px;"/>
                </div>
                @endif
                <button type="button" data-bs-toggle="modal" data-bs-target="#foto" class="btn btn-info pt-1 pb-1" style="font-size: 14px; fill: white">
                    Unggah Foto
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 109.3V352c0 17.7-14.3 32-32 32s-32-14.3-32-32V109.3l-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352H192c0 35.3 28.7 64 64 64s64-28.7 64-64H448c35.3 0 64 28.7 64 64v32c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V416c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg>
                </button>

                <form action="{{ route('user.biodata.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal fade" id="foto" tabindex="-1" aria-labelledby="fotoLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h6 class="modal-title fs-5" id="fotoLabel">Update Foto</h6>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-auto">Pilih Foto</p>
                                <input type="file" class="w-100" placeholder="Pilih foto" name="profile_image_path" accept="image/png, image/jpeg, image/jpg" required>
                                <small class="mt-auto mb-0">Ukuran file maksimal 2MB</small>
                                <p class="font-italic m-0" style="font-size: 12px">(Jenis file yang diijinkan: jpg, jpeg, png dengan ukuran maksimal 2MB)</p>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table mt-2 mb-0" style="font-size: 14px">
                        <tr>
                            <td style="width: 15%">NIDN</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $biodata->nidn ?? 'Belum ada data'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Nama</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $biodata->full_name ?? 'Belum ada data'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Jenis Kelamin</td>
                            <td style="width: 1%">:</td>
                            <td class="w-25">{{ $biodata->gender ?? 'Belum ada data' }}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Tempat Lahir</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $biodata->place_of_birth ?? 'Belum ada data'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Tangal Lahir</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $biodata->date_of_birth ?? 'Belum ada data'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Nama Ibu Kandung</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $biodata->mother_name ?? 'Belum ada data'}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card p-3">
                <div class="d-flex justify-content-between">
                    <h5 class="text-bold">Alamat dan Kontak</h5>
                    <a href="{{ route('user.alamat-kontak') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table mt-2 mb-0" style="font-size: 14px">
                        <tr>
                            <td style="width: 15%">Email</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->email ?? 'Belum ada data' }}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Alamat</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->address ?? 'Belum ada data' }}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">RT</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->rt ?? 'Belum ada data' }}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">RW</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->rw ?? 'Belum ada data' }}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Dusun</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->sub_village ?? 'Belum ada data' }}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Desa/Kelurahan</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->village ?? 'Belum ada data'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Kota/Kabupaten/Kecamatan</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->city_discrict_sub_district ?? 'Belum ada data'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">Kode Pos</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->postal_code ?? 'Belum ada data'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">No. Telepon Rumah</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->home_phone_number ?? 'Belum ada data'}}</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">No. HP</td>
                            <td style="width: 1%">:</td>
                            <td>{{ $address->phone_number ?? 'Belum ada data'}}</td>
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
                    <a href="{{ route('user.keluarga') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
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
                    <a href="{{ route('user.kependudukan') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
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
                    <a href="{{ route('user.kepegawaian') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                        <i class="fas fa-pencil-alt"></i>
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
                    <a href="{{ route('user.bidang-keilmuan') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
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
                    <a href="{{ route('user.lain') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                        <i class="fas fa-pencil-alt"></i>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@stop