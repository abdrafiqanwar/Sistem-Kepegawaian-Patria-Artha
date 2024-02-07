@extends('adminlte::page')

@section('title_prefix', 'Data Pribadi')

@section('content_header')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.personal-data') }}">Profile</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.personal-data') }}">Data Pribadi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Alamat dan Kontak</li>
    </ol>
</nav>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Form Ajuan Perubahan Data Alamat dan Kontak</h5>
            <a href="{{ route('user.personal-data') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
        <p style="font-size: 14px">Perubahan data ini memerlukan validasi yang akan diproses dalam maksimal 21 hari kerja setelah diajukan</p>

        <form action="{{ route('user.address-contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="table-responsive">
            <table class="table border" style="font-size: 14px">
                <tr>
                    <th class="w-25"></th>
                    <th class="text-center w-25">Data Saat Ini</th>
                    <th class="text-center">Data Baru</th>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $data->email ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm  @error('email') is-invalid @enderror" name="email" value="{{ $data->email ?? '' }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $data->address ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm  @error('address') is-invalid @enderror" name="address" value="{{ $data->address ?? '' }}">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>RT</th>
                    <td>{{ $data->rt ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm  @error('rt') is-invalid @enderror" name="rt" value="{{ $data->rt ?? '' }}">
                        @error('rt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>RW</th>
                    <td>{{ $data->rw ?? 'Belum ada data' }}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm  @error('rw') is-invalid @enderror" name="rw" value="{{ $data->rw ?? '' }}">
                        @error('rw')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>Dusun</th>
                    <td>{{ $data->sub_village ?? 'Belum ada data' }}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm  @error('sub_village') is-invalid @enderror" name="sub_village" value="{{ $data->sub_village ?? '' }}">
                        @error('sub_village')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>Desa/Kelurahan</th>
                    <td>{{ $data->village ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm  @error('village') is-invalid @enderror" name="village" value="{{ $data->village ?? '' }}">
                        @error('village')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>Kota/Kabupaten/Kecamatan</th>
                    <td>{{ $data->city_discrict_sub_district ?? 'Belum ada data'}}</td>
                    <td>
                        <select class="form-select form-control form-control-sm" aria-label="Small select example" name="city_discrict_sub_district">
                            <option selected value="{{ $data->city_discrict_sub_district ?? '' }}">{{ $data->city_discrict_sub_district ?? 'Pilih...' }}</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Kode Pos</th>
                    <td>{{ $data->postal_code ?? 'Belum ada data' }}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm  @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ $data->postal_code ?? '' }}">
                        @error('postal_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>No. Telepon Rumah</th>
                    <td>{{ $data->home_phone_number ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm  @error('home_phone_number') is-invalid @enderror" name="home_phone_number" value="{{ $data->home_phone_number ?? '' }}">
                        @error('home_phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>No. HP</th>
                    <td>{{ $data->phone_number ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="form-control form-control-sm  @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $data->phone_number ?? '' }}">
                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
            </table>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="font-weight-bold" style="font-size: 12px">
                        <p class="mb-0">Dokumen Bukti</p>
                        <p>Mohon melampirkan file gambar asli yang jelas dan tidak blur</p>
                        <p>Dokumen yang dilampirkan adalah dokumen wajib dan dokumen yang sesuai dengan data yang diusulkan.</p>
                        <p class="mb-0">Dokumen Wajib:</p>
                        <p class="mb-0">- KTP</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="border d-block w-100" style="font-size: 14px">
                        <p class="bg-secondary font-weight-bold py-1 pl-2 mb-2">KTP</p>
                        <div class="pl-2 pr-2 mb-2">
                            <p class="m-0 font-weight-bold">
                                Dokumen Dilampirkan
                                <span style="color: red">*</span>
                            </p>
                            <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 2MB)</p>   
                            <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="@error('ktp_image_path') is-invalid @enderror" placeholder="Pilih file" name="ktp_image_path">
                            @error('ktp_image_path')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="" id="parent">
                </div>
    
                <div class="row">
                    <div class="mt-2 d-flex justify-content-between w-100">
                        <button id="tambah" type="button" class="btn p-0 font-weight-bold" style="color: cornflowerblue; font-size: 14px">
                            Tambah dokumen lain
                        </button>
                        <button class="btn btn-primary" type="submit" style="fill: white; font-size: 14px">
                            <i class="fas fa-save"></i>
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
@stop

@section('css')
@stop   

@section('js')
    <script>
        let dokumenRow = 0;

        $('#tambah').click(() =>{
            dokumenRow++;
            inputDokumen(dokumenRow);
        })

        inputDokumen = (i) => {
            let tr = `<div class="row">
                <div class="border d-block w-100 mt-2" style="font-size: 14px" id="dokumen-${i}">
                <div class="d-flex justify-content-between bg-secondary py-1 pl-2 mb-2">
                <p class="font-weight-bold">Dokumen</p>
                <button dokumen-id="${i}" class="btn pt-0 pb-0" style="font-size: 12px; fill: white">
                    <i class="fas fa-times" style="color:white"></i>
                </button>
                </div>
                <div class="pl-2 pr-2 mb-2">
                    <p class="m-0 font-weight-bold">
                        Dokumen Dilampirkan
                        <span style="color: red">*</span>
                    </p>
                    <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 2MB)</p>   
                    <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="@error('file_path') is-invalid @enderror" placeholder="Pilih file" name="file_path[]">
                    @error('file_path')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <p class="m-0 mt-2 font-weight-bold pb-1">Keterangan</p>
                    <input type="text" class="form-control form-control-sm @error('description') is-invalid @enderror" name="description[]">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
            </div>`;
            $('#parent').append(tr);
        }

        $('#parent').on('click', 'button', function(){
            let id = $(this).attr('dokumen-id');
            $(`#dokumen-${id}`).remove();
        })
    </script>
@stop