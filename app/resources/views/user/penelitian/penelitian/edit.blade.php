@extends('adminlte::page')

@section('title', 'Pelaksana Penelitian | Penelitian')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.penelitian') }}" class="btn p-0">
            <h6>Pelaksana Kegiatan</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.penelitian') }}" class="btn p-0">
            <h6>Penelitian</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="" class="btn p-0">
            <h6>Edit</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Form Edit Penelitian</h5>
            <a href="{{ route('user.penelitian') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 border" style="font-size: 14px">
                <tr>
                    <th class="w-25">Judul Kegiatan</th>
                    <td>Penjaringan Penyamaan Persepsi Kajian Akademis Tentang Biaya Kerugian Lingkungan Provinsi Kalimantan Utara</td>
                </tr>
                <tr>
                    <th class="w-25">Afiliasi</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Kelompok Bidang</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Litabmas Sebelumnya</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Jenis SKIM</th>
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
                    <th class="w-25">Lokasi Kegiatan</th>
                    <td>Provinsi Kalimantan Utara</td>
                </tr>
                <tr>
                    <th class="w-25">Tahun Usulan</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                </tr>
                <tr>
                    <th class="w-25">Tahun Kegiatan</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                </tr>
                <tr>
                    <th class="w-25">Tahun Pelaksanaan</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                </tr>
                <tr>
                    <th class="w-25">Lama Kegiatan (Tahun)</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                </tr>
                <tr>
                    <th class="w-25">Tahun Pelaksanaan Ke</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Dana dari Dikti (Rp.)</th>
                    <td>
                        <input type="text" class="w-100" value="0.00">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Dana dari Perguruan Tinggi (Rp.)</th>
                    <td>
                        <input type="text" class="w-100" value="0.00">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Dana dari Institusi Lain (Rp.)</th>
                    <td>
                        <input type="text" class="w-100" value="0.00">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">In Kind</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Nomor SK Penugasan</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Tanggal SK Penugasan</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Mitra Litabmas</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
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
                    <a href="" class="" style="fill: crimson; color: crimson; font-size: 14px">
                        <i class="fas fa-trash"></i>
                        Hapus Dokumen
                    </a>
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

        <div class="row mt-2 mb-4">
            <div class="col-lg-4" style="font-size: 12px">
            </div>
            <div class="col d-flex justify-content-between" style="font-size: 14px">
                <button id="tambah" class="btn p-0 font-weight-bold" style="color: cornflowerblue; font-size: 14px">
                    Tambah dokumen lain
                </button>
            </div>
        </div>

        <div class="d-flex">
            <i class="fas fa-list"></i>
            <h6 class="text-bold ml-2">Anggota Kegiatan (Dosen)</h6>
        </div>

        <div class="table-responsive">
            <table id="tableDosen" class="table mt-2 border" style="font-size: 14px">
                <tr class="text-center">
                    <th class="w-25">Perguruan Tinggi</th>
                    <th class="w-25">Nama Dosen</th>
                    <th>Peran</th>
                    <th>Status</th>
                    <th style="width: 5%"></th>
                </tr>
                <tr>
                    <td class="w-25">
                        <input type="text" class="w-100" value="Universitas Patria Artha" disabled>
                    </td>
                    <td>
                        <input type="text" class="w-100" value="09020177708 - SUHENDRA S" disabled>
                    </td>
                    <td>
                        <select class="form-select form-select-sm w-100" aria-label="Small select example">
                            <option selected>Pilih...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>
                    <td>
                        <input type="checkbox" class="mr-1">Aktif
                    </td>
                    <td style="width: 5%"></td>
                </tr>
            </table>
        </div>
        <div>
            <button id="tambahDosen" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah Anggota
            </button>
        </div>

        <div class="d-flex mt-4">
            <i class="fas fa-list"></i>
            <h6 class="text-bold ml-2">Anggota Kegiatan (Mahasiswa)</h6>
        </div>

        <div class="table-responsive">
            <table id="tableMahasiswa" class="table mt-2 border" style="font-size: 14px">
                <tr class="text-center">
                    <th class="w-50">Nama Mahasiswa</th>
                    <th>Peran</th>
                    <th>Status</th>
                    <th style="width: 5%"></th>
                </tr>
                <tr id="mahasiswa-0">
                    <td class="w-50">
                        <input type="text" class="w-100">
                    </td>
                    <td>
                        <select class="form-select form-select-sm w-100" aria-label="Small select example">
                            <option selected>Pilih...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>
                    <td>
                        <input type="checkbox" class="mr-1">Aktif
                    </td>
                    <td>
                        <button mahasiswa-id="0" class="btn btn-danger btn-sm" style="fill: white">
                            <i class="fas fa-minus"></i>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <button id="tambahMahasiswa" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah Anggota
            </button>
        </div>

        <div class="d-flex mt-4 justify-content-between">
            <div class="d-flex">
                <i class="fas fa-list"></i>
                <h6 class="text-bold ml-2">Anggota Kegiatan (Kolaborator Eksternal)</h6>
            </div>
            <button class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah kolaborator eksternal</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title w-100 font-weight-bold">Tambah Non Civitas Akademika</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body pb-0">
                            <div class="table-responsive">
                                <table class="table" style="font-size: 14px">
                                    <tr>
                                        <th>Nama</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Negara</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>
                                            <input type="radio" name="gender" class="mr-1">Laki-laki
                                            <input type="radio" name="gender" class="mr-1">Perempuan
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>NIK</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jalan</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>RT</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>RW</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Dusun</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Desa/Kelurahan</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kode Pos</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No. Telepon Rumah</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>No. Telepon Seluler</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>
                                            <input type="text" class="w-100">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-primary" style="fill: white; font-size: 12px">
                                <i class="fas fa-save"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table id="tableEksternal" class="table mt-2 border" style="font-size: 14px">
                <tr class="text-center">
                    <th class="w-50">Nama</th>
                    <th>Peran</th>
                    <th>Status</th>
                    <th style="width: 5%"></th>
                </tr>
                <tr id="eksternal-0">
                    <td class="w-50">
                        <select class="form-select form-select-sm w-100" aria-label="Small select example">
                            <option selected>Pilih...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-select form-select-sm w-100" aria-label="Small select example">
                            <option selected>Pilih...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </td>
                    <td>
                        <input type="checkbox" class="mr-1">Aktif
                    </td>
                    <td>
                        <button eksternal-id="0" class="btn btn-danger btn-sm" style="fill: white">
                            <i class="fas fa-minus"></i>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <button id="tambahEksternal" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah Anggota
            </button>
        </div>

        <div class="d-flex mt-4">
            <i class="fas fa-list"></i>
            <h6 class="text-bold ml-2">Bidang Keilmuan Penelitian</h6>
        </div>

        <div class="table-responsive">
            <table id="tableBidang" class="table mt-2 border" style="font-size: 14px">
                <tr class="text-center">
                    <th class="w-75">Pilih Kelompok Bidang</th>
                    <th style="width: 5%"></th>
                </tr>
                <tr id="bidang-0">
                    <td class="w-75">
                        <input type="text" class="w-100">
                    </td>
                    <td>
                        <button bidang-id="0" class="btn btn-danger btn-sm" style="fill: white">
                            <i class="fas fa-minus"></i>
                        </button>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <button id="tambahBidang" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <i class="fas fa-plus-square"></i>
                Tambah
            </button>
        </div>

        <div class="mt-4">
            <button class="btn btn-primary" style="fill: white; font-size: 12px">
                <i class="fas fa-save"></i>
                Simpan
            </button>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
<script>
    let dosenRow = 0;

    $('#tambahDosen').click(() =>{
        dosenRow++;
        inputDosen(dosenRow);
    })

    inputDosen = (i) => {
        let dosen = `<tr id="dosen-${i}">
                        <td>
                            <input type="text" class="w-100">
                        </td>
                        <td>
                            <input type="text" class="w-100" placeholder="NIP - NAMA">
                        </td>
                        <td>
                            <select class="form-select form-select-sm w-100" aria-label="Small select example">
                                <option selected>Pilih...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </td>
                        <td>
                            <input type="checkbox" class="mr-1">Aktif
                        </td>
                        <td>
                            <button dosen-id="${i}" class="btn btn-danger btn-sm" style="fill: white">
                                <i class="fas fa-minus"></i>
                            </button>
                        </td>
                    </tr>`;
        $('#tableDosen').append(dosen);
    }

    $('#tableDosen').on('click', '.btn', function(){
        let id = $(this).attr('dosen-id');
        $('#dosen-'+id).remove();
    })

    let mahasiswaRow = 0;

    $('#tambahMahasiswa').click(() =>{
        mahasiswaRow++;
        inputMahasiswa(mahasiswaRow);
    })

    inputMahasiswa = (i) => {
        let mahasiswa = `<tr id="mahasiswa-${i}">
                        <td>
                            <input type="text" class="w-100">
                        </td>
                        <td>
                            <select class="form-select form-select-sm w-100" aria-label="Small select example">
                                <option selected>Pilih...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </td>
                        <td>
                            <input type="checkbox" class="mr-1">Aktif
                        </td>
                        <td>
                            <button mahasiswa-id="${i}" class="btn btn-danger btn-sm" style="fill: white">
                                <i class="fas fa-minus"></i>
                            </button>
                        </td>
                    </tr>`;
        $('#tableMahasiswa').append(mahasiswa);
    }

    $('#tableMahasiswa').on('click', '.btn', function(){
        let id = $(this).attr('mahasiswa-id');
        $('#mahasiswa-'+id).remove();
    })


    let eksternalRow = 0;

    $('#tambahEksternal').click(() =>{
        eksternalRow++;
        inputEksternal(eksternalRow);
    })

    inputEksternal = (i) => {
        let eksternal = `<tr id="eksternal-${i}">
                        <td>
                            <select class="form-select form-select-sm w-100" aria-label="Small select example">
                                <option selected>Pilih...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </td>
                        <td>
                            <select class="form-select form-select-sm w-100" aria-label="Small select example">
                                <option selected>Pilih...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </td>
                        <td>
                            <input type="checkbox" class="mr-1">Aktif
                        </td>
                        <td>
                                <button eksternal-id="${i}" class="btn btn-danger btn-sm" style="fill: white">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </td>
                    </tr>`;
        $('#tableEksternal').append(eksternal);
    }

    $('#tableEksternal').on('click', '.btn', function(){
        let id = $(this).attr('eksternal-id');
        $('#eksternal-'+id).remove();
    })

    let bidangRow = 0;

    $('#tambahBidang').click(() =>{
        bidangRow++;
        inputBidang(bidangRow);
    })

    inputBidang = (i) => {
        let bidang = `<tr id="bidang-${i}">
                        <td>
                            <input type="text" class="w-100">
                        </td>
                        <td>
                                <button bidang-id="${i}" class="btn btn-danger btn-sm" style="fill: white">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </td>
                    </tr>`;
        $('#tableBidang').append(bidang);
    }

    $('#tableBidang').on('click', '.btn', function(){
        let id = $(this).attr('bidang-id');
        $('#bidang-'+id).remove();
    })
    
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@stop