@extends('adminlte::page')

@section('title_prefix', 'Data Pribadi')

@section('content_header')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.personal-data') }}">Profile</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.personal-data') }}">Data Pribadi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kependudukan</li>
    </ol>
</nav>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Formulir Ajuan Perubahan Data Kependudukan</h5>
            <a href="{{ route('user.personal-data') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
        <p style="font-size: 14px">Perubahan data ini memerlukan validasi yang akan diproses dalam maksimal 21 hari kerja setelah diajukan</p>

        <div class="table-responsive">
            <table class="table border" style="font-size: 14px">
                <tr>
                    <th class="w-25"></th>
                    <th class="text-center w-25">Data Saat Ini</th>
                    <th class="text-center">Data Baru</th>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>7371100201770009</td>
                    <td>
                        <input type="text" class="form-control form-control-sm">
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>Islam</td>
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
                    <th>Kewarganegaraan</th>
                    <td>Indonesia</td>
                    <td>
                        <input type="text" class="form-control form-control-sm">
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
                        <p class="mb-0">- KK</p>
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
                <div class="row">
                    <div class="border d-block w-100 mt-2" style="font-size: 14px">
                        <p class="bg-secondary font-weight-bold py-1 pl-2 mb-2">KK</p>
                        <div class="pl-2 pr-2 mb-2">
                            <p class="m-0 font-weight-bold">
                                Dokumen Dilampirkan
                                <span style="color: red">*</span>
                            </p>
                            <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 2MB)</p>   
                            <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="@error('kk_image_path') is-invalid @enderror" placeholder="Pilih file" name="kk_image_path">
                            @error('kk_image_path')
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
                    <textarea class="w-100 form-control form-control-sm @error('description') is-invalid @enderror" name="description[]" cols="1" rows="2"></textarea>
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