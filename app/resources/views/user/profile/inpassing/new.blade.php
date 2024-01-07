@extends('adminlte::page')

@section('title', 'Profile | Inpassing')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.inpassing') }}" class="btn p-0">
            <h6>Profil</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.inpassing') }}" class="btn p-0">
            <h6>Inpassing</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="" class="btn p-0">
            <h6>Tambah</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Form Tambah Inpassing</h5>
            <a href="{{ route('user.inpassing') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 border" style="font-size: 14px">
                <tr>
                    <th style="width: 35%">Golongan/Pangkat</th>
                    <td>
                        <select class="form-select form-select-sm w-100" aria-label="Small select example">
                            <option selected>Pilih...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <th style="width: 35%">Nomor SK Inpassing</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th style="width: 35%">Tanggal SK</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th style="width: 35%">Terhitung Mulai Tanggal</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th style="width: 35%">Angka Kredit</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th style="width: 35%">Masa Kerja (Tahun)</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th style="width: 35%">Masa Kerja (Bulan)</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
            </table>
        </div>

        <div class="row">
            <div class="col-lg-4 font-weight-bold" style="font-size: 12px">
                <p class="mb-0">Upload Dokumen</p>
                <p class="mb-0" style="font-style: italic">(Maksimal total ukuran file dalam sekali proses upload: 5 MB)</p>
            </div>

            <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
                <p class="bg-secondary p-1 pl-2 font-weight-bold">Dokumen</p>
                <div class="pl-2 pr-2">
                    <p class="m-0 font-weight-bold">
                        File
                        <span style="color: red">*</span>
                    </p>
                    <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png, doc, docx, xls, xlsx, txt)</p>
                    <input type="file" class="w-100" placeholder="Pilih file">

                    <p class="m-0 mt-2 font-weight-bold pb-1">Nama Dokumen</p>
                    <input type="text" class="w-100">

                    <p class="m-0 mt-2 font-weight-bold pb-1">Keterangan</p>
                    <input type="text" class="w-100">
                    
                    <p class="m-0 mt-2 font-weight-bold pb-1">Jenis Dokumen</p>
                    <select class="form-select w-100 mt-1" aria-label="Small select example">
                        <option selected>Pilih...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <p class="m-0 mt-2 font-weight-bold pb-1">Tautan Dokumen</p>
                    <input type="text" class="w-100">
                </div>
            </div>
        </div>

        <div class="" id="parent">
        </div>

        <div class="row mt-2">
            <div class="col-lg-4" style="font-size: 12px">
            </div>
            <div class="col d-flex justify-content-between" style="font-size: 14px">
                <button id="tambah" class="btn p-0 font-weight-bold" style="color: cornflowerblue; font-size: 14px">
                    Tambah dokumen lain
                </button>
                <button class="btn btn-primary" style="fill: white; font-size: 12px">
                    <i class="fas fa-save"></i>
                    Simpan
                </button>
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
        let tr = `<div class="row mt-2" id="dokumen-${i}">
            <div class="col-lg-4" style="font-size: 12px">
            </div>

            <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
                <div class="d-flex justify-content-between bg-secondary" style="margin-bottom: 16px">
                        <p class="p-1 pl-2 font-weight-bold mb-auto">Dokumen</p>
                        <button dokumen-id="${i}" class="btn pt-0 pb-0" style="font-size: 12px; fill: white">
                            <i class="fas fa-times" style="color:white"></i>
                        </button>
                    </div>
                <div class="pl-2 pr-2">
                    <p class="m-0 font-weight-bold">
                        File
                        <span style="color: red">*</span>
                    </p>
                    <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png, doc, docx, xls, xlsx, txt)</p>
                    <input type="file" class="w-100" placeholder="Pilih file">
                    <p class="m-0 mt-2 font-weight-bold pb-1">Nama Dokumen</p>
                    <input type="text" class="w-100">
                    <p class="m-0 mt-2 font-weight-bold pb-1">Keterangan</p>
                    <input type="text" class="w-100">
                    
                    <p class="m-0 mt-2 font-weight-bold pb-1">Jenis Dokumen</p>
                    <select class="form-select w-100 mt-1" aria-label="Small select example">
                        <option selected>Pilih...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <p class="m-0 mt-2 font-weight-bold pb-1">Tautan Dokumen</p>
                    <input type="text" class="w-100">
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