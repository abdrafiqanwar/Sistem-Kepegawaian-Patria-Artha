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
            <h6>Tambah</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Form Tambah Penelitian</h5>
            <a href="{{ route('user.penelitian') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 border" style="font-size: 14px">
                <tr>
                    <th class="w-25">Judul Kegiatan</th>
                    <td>
                        <input type="text" class="w-100">
                    </td>
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
                    <td>
                        <input type="text" class="w-100">
                    </td>
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
                        <svg style="fill: red; padding-bottom: 2px" xmlns="http://www.w3.org/2000/svg" height="8" width="8" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z"/></svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                Tambah Anggota
            </button>
        </div>

        <div class="d-flex mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
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
                <tr>
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
                    <td style="width: 5%"></td>
                </tr>
            </table>
        </div>
        <div>
            <button id="tambahMahasiswa" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                Tambah Anggota
            </button>
        </div>

        <div class="d-flex mt-4 justify-content-between">
            <div class="d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M48 96V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V170.5c0-4.2-1.7-8.3-4.7-11.3l33.9-33.9c12 12 18.7 28.3 18.7 45.3V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H309.5c17 0 33.3 6.7 45.3 18.7l74.5 74.5-33.9 33.9L320.8 84.7c-.3-.3-.5-.5-.8-.8V184c0 13.3-10.7 24-24 24H104c-13.3 0-24-10.7-24-24V80H64c-8.8 0-16 7.2-16 16zm80-16v80H272V80H128zm32 240a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z"/></svg>
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
                <tr>
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
                    <td style="width: 5%"></td>
                </tr>
            </table>
        </div>
        <div>
            <button id="tambahEksternal" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                Tambah Anggota
            </button>
        </div>

        <div class="d-flex mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
            <h6 class="text-bold ml-2">Bidang Keilmuan Penelitian</h6>
        </div>

        <div class="table-responsive">
            <table id="tableBidang" class="table mt-2 border" style="font-size: 14px">
                <tr class="text-center">
                    <th class="w-75">Pilih Kelompok Bidang</th>
                    <th style="width: 5%"></th>
                </tr>
                <tr>
                    <td class="w-75">
                        <input type="text" class="w-100">
                    </td>
                    <td style="width: 5%"></td>
                </tr>
            </table>
        </div>
        <div>
            <button id="tambahBidang" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 14px; fill: white">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V96c0-8.8-7.2-16-16-16H64zM0 96C0 60.7 28.7 32 64 32H384c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                Tambah
            </button>
        </div>

        <div class="mt-4">
            <button class="btn btn-primary" style="fill: white; font-size: 12px">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M48 96V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V170.5c0-4.2-1.7-8.3-4.7-11.3l33.9-33.9c12 12 18.7 28.3 18.7 45.3V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H309.5c17 0 33.3 6.7 45.3 18.7l74.5 74.5-33.9 33.9L320.8 84.7c-.3-.3-.5-.5-.8-.8V184c0 13.3-10.7 24-24 24H104c-13.3 0-24-10.7-24-24V80H64c-8.8 0-16 7.2-16 16zm80-16v80H272V80H128zm32 240a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z"/></svg>
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
        let dosen = `<tr id="input-tr-${i}">
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
                            <button data-id="${i}" class="btn btn-danger btn-sm" style="fill: white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                            </button>
                        </td>
                    </tr>`;
        $('#tableDosen').append(dosen);
    }

    $('#tableDosen').on('click', '.btn', function(){
        let id = $(this).attr('data-id');
        $('#input-tr-'+id).remove();
    })

    let mahasiswaRow = 0;

    $('#tambahMahasiswa').click(() =>{
        mahasiswaRow++;
        inputMahasiswa(mahasiswaRow);
    })

    inputMahasiswa = (i) => {
        let mahasiswa = `<tr id="input-tr-${i}">
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
                            <button data-id="${i}" class="btn btn-danger btn-sm" style="fill: white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                            </button>
                        </td>
                    </tr>`;
        $('#tableMahasiswa').append(mahasiswa);
    }

    $('#tableMahasiswa').on('click', '.btn', function(){
        let id = $(this).attr('data-id');
        $('#input-tr-'+id).remove();
    })


    let eksternalRow = 0;

    $('#tambahEksternal').click(() =>{
        eksternalRow++;
        inputEksternal(eksternalRow);
    })

    inputEksternal = (i) => {
        let eksternal = `<tr id="input-tr-${i}">
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
                                <button data-id="${i}" class="btn btn-danger btn-sm" style="fill: white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                                </button>
                            </td>
                    </tr>`;
        $('#tableEksternal').append(eksternal);
    }

    $('#tableEksternal').on('click', '.btn', function(){
        let id = $(this).attr('data-id');
        $('#input-tr-'+id).remove();
    })

    let bidangRow = 0;

    $('#tambahBidang').click(() =>{
        bidangRow++;
        inputBidang(bidangRow);
    })

    inputBidang = (i) => {
        let bidang = `<tr id="input-tr-${i}">
                        <td>
                            <input type="text" class="w-100">
                        </td>
                        <td>
                                <button data-id="${i}" class="btn btn-danger btn-sm" style="fill: white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg>
                                </button>
                            </td>
                    </tr>`;
        $('#tableBidang').append(bidang);
    }

    $('#tableBidang').on('click', '.btn', function(){
        let id = $(this).attr('data-id');
        $('#input-tr-'+id).remove();
    })
    
    let dokumen = `<div class="row mt-2">
        <div class="col-lg-4" style="font-size: 12px">
        </div>

        <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
            <p class="bg-secondary p-1 pl-2 font-weight-bold">Dokumen</p>
            <div class="pl-2 pr-2">
                    <p class="m-0 font-weight-bold">
                        File
                        <svg style="fill: red; padding-bottom: 2px" xmlns="http://www.w3.org/2000/svg" height="8" width="8" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M208 32c0-17.7 14.3-32 32-32h32c17.7 0 32 14.3 32 32V172.9l122-70.4c15.3-8.8 34.9-3.6 43.7 11.7l16 27.7c8.8 15.3 3.6 34.9-11.7 43.7L352 256l122 70.4c15.3 8.8 20.5 28.4 11.7 43.7l-16 27.7c-8.8 15.3-28.4 20.6-43.7 11.7L304 339.1V480c0 17.7-14.3 32-32 32H240c-17.7 0-32-14.3-32-32V339.1L86 409.6c-15.3 8.8-34.9 3.6-43.7-11.7l-16-27.7c-8.8-15.3-3.6-34.9 11.7-43.7L160 256 38 185.6c-15.3-8.8-20.5-28.4-11.7-43.7l16-27.7C51.1 98.8 70.7 93.6 86 102.4l122 70.4V32z"/></svg>
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

    $('#tambah').click(() =>{
        $('#parent').append(dokumen);
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@stop