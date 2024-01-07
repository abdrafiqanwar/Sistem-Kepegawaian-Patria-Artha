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

    <h6 class="pl-2 pr-2">/</h6>

    <a href="" class="btn p-0">
        <h6>Alamat dan Kontak</h6>
    </a>
</div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Form Ajuan Perubahan Data Alamat dan Kontak</h5>
            <a href="{{ route('user.data-pribadi') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
        <p style="font-size: 14px">Perubahan data ini memerlukan validasi yang akan diproses dalam maksimal 21 hari kerja setelah diajukan</p>

        <div class="table-responsive">
            <table class="table mt-2 border-left border-right" style="font-size: 14px">
                <tr>
                    <th class="w-25"></th>
                    <th class="text-center w-25">Data Saat Ini</th>
                    <th class="text-center">Data Baru</th>
                </tr>
                <tr>
                    <th class="w-25">Email</th>
                    <td class="w-25">Null</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Alamat</th>
                    <td class="w-25">Null</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">RT</th>
                    <td class="w-25">Null</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">RW</th>
                    <td class="w-25">Null</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Dusun</th>
                    <td class="w-25">Null</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Desa/Kelurahan</th>
                    <td class="w-25">Null</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Kota/Kabupaten/Kecamatan</th>
                    <td class="w-25">Null</td>
                    <td>
                        <select class="form-select w-100 h-100" aria-label="Small select example">
                            <option selected>Pilih...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Kode Pos</th>
                    <td class="w-25">Null</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">No. Telepon Rumah</th>
                    <td class="w-25">Null</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr  class="border-left border-right border-bottom">
                    <th class="w-25">No. HP</th>
                    <td class="w-25">Null</td>
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
                <br>
                <p class="mb-0" style="font-style: italic; color: cornflowerblue">Dokumen yang dilampirkan adalah dokumen wajib dan dokumen yang sesuai dengan data yang diusulkan.</p>
                <br>
                <p class="mb-0" style="font-style: italic; color: cornflowerblue">Dokumen Wajib:</p>
                <p class="mb-0" style="font-style: italic; color: cornflowerblue">- KTP</p>
            </div>

            <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
                <p class="bg-secondary p-1 pl-2 font-weight-bold">KTP</p>
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