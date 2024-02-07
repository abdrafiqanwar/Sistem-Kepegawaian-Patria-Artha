@extends('adminlte::page')

@section('title_prefix', 'Data Pribadi')

@section('content_header')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.personal-data') }}">Profile</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.personal-data') }}">Data Pribadi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lain-lain</li>
    </ol>
</nav>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Formulir Ajuan Perubahan Data Lain-lain</h5>
            <a href="{{ route('user.personal-data') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
        <p style="font-size: 14px">Perubahan data ini memerlukan validasi yang akan diproses dalam maksimal 21 hari kerja setelah diajukan</p>

        <div class="table-responsive">
            <table class="table border-left border-right border-bottom mt-2" style="font-size: 14px">
                <tr>
                    <th class="w-25"></th>
                    <th class="text-center w-25">Data Saat Ini</th>
                    <th class="text-center">Data Baru</th>
                </tr>
                <tr>
                    <th class="w-25">NPWP</th>
                    <td class="w-25">853599539904000</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm">
                        <p class="mb-0 font-italic" style="font-size: 12px">*Masukkan Nomor NPWP tanpa menggunakan titik (.) dan dash (-)</p>
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Nama Wajib Pajak</th>
                    <td class="w-25">(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm">
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
                        <p class="mb-0">- NPWP</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="border d-block w-100" style="font-size: 14px">
                        <p class="bg-secondary font-weight-bold py-1 pl-2 mb-2">NPWP</p>
                        <div class="pl-2 pr-2 mb-2">
                            <p class="m-0 font-weight-bold">
                                Dokumen Dilampirkan
                                <span style="color: red">*</span>
                            </p>
                            <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 2MB)</p>   
                            <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="w-100 @error('npwp_path') is-invalid @enderror" placeholder="Pilih file" name="npwp_path">
                            @error('npwp_path')
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
                    <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="w-100 @error('file_path') is-invalid @enderror" placeholder="Pilih file" name="file_path[]">
                    @error('file_path')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <p class="m-0 mt-2 font-weight-bold pb-1">Keterangan</p>
                    <input type="text" class="w-100 form-control form-control-sm @error('description') is-invalid @enderror" name="description[]">
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