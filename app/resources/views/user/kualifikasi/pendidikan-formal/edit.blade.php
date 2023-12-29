@extends('adminlte::page')

@section('title', 'Kualifikasi | Pendidikan Formal')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.pendidikan-formal') }}" class="btn p-0">
            <h6>Kualifikasi</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.pendidikan-formal') }}" class="btn p-0">
            <h6>Pendidikan Formal</h6>
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
            <h5 class="text-bold">Form Perubahan Riwayat Pendidikan Formal</h5>
            <a href="{{ route('user.pendidikan-formal') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 border" style="font-size: 14px">
                <tr>
                    <th class="w-25"></th>
                    <th class="text-center">Data Saat Ini</th>
                    <th class="text-center">Data Baru</th>
                </tr>
                <tr>
                    <th class="w-25">Perguruan Tinggi</th>
                    <td>Sekolah Tinggi Ilmu Manajemen Nitro Makassar</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Program Studi</th>
                    <td>(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Gelar Akademik</th>
                    <td>S.E.</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Bidang Studi</th>
                    <td>*</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Tahun Masuk</th>
                    <td>0</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Tahun Lulus</th>
                    <td>2000</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Tanggal Kelulusan</th>
                    <td>(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Nomor Induk Mahasiswa</th>
                    <td>(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Jumlah Semester Tempuh</th>
                    <td>(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Jumlah SKS Kelulusan</th>
                    <td>(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">IPK Kelulusan</th>
                    <td>(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100">
                        <p class="mb-0 font-italic" style="font-size: 12px">*Masukkan angka menggunakan tanda titik.</p>
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Nomor SK Penyetaraan</th>
                    <td>(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Tanggal SK Penyetaraan</th>
                    <td>(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Nomor Ijazah</th>
                    <td>(Tidak ada data)</td>
                    <td>
                        <input type="text" class="w-100">
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Judul Tesis/Disertasi</th>
                    <td>(Tidak ada data)</td>
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
                    <th>Nomor</th>
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
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
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
                <br>
                <p class="mb-0" style="font-style: italic; color: cornflowerblue">Dokumen yang dilampirkan adalah dokumen wajib dan dokumen yang sesuai dengan data yang diusulkan.</p>
                <br>
                <p class="mb-0" style="font-style: italic; color: cornflowerblue">Dokumen Wajib:</p>
                <p class="mb-0" style="font-style: italic; color: cornflowerblue">- Ijazah</p>
                <p class="mb-0" style="font-style: italic; color: cornflowerblue">- SK Penyetaraan Ijazah (PT Luar Negeri)</p>
                <p class="mb-0" style="font-style: italic; color: cornflowerblue">- Transkrip Nilai</p>
            </div>

            <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
                <p class="bg-secondary p-1 pl-2 font-weight-bold">Ijazah</p>
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

        <div class="row">
            <div class="col-lg-4 font-weight-bold" style="font-size: 12px">
            </div>

            <div class="col border pb-3 pl-0 pr-0 mt-2" style="font-size: 14px">
                <p class="bg-secondary p-1 pl-2 font-weight-bold">SK Penyetaraan Ijazah</p>
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

        <div class="row">
            <div class="col-lg-4 font-weight-bold" style="font-size: 12px">
            </div>

            <div class="col border pb-3 pl-0 pr-0 mt-2" style="font-size: 14px">
                <p class="bg-secondary p-1 pl-2 font-weight-bold">Transkrip Nilai</p>
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

        <div class="row mt-2">
            <div class="col-lg-4" style="font-size: 12px">
            </div>
            <div class="col d-flex justify-content-between" style="font-size: 14px">
                <button id="tambah" class="btn p-0 font-weight-bold" style="color: cornflowerblue; font-size: 14px">
                    Tambah dokumen lain
                </button>
                <button class="btn btn-primary" style="fill: white; font-size: 12px">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M48 96V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V170.5c0-4.2-1.7-8.3-4.7-11.3l33.9-33.9c12 12 18.7 28.3 18.7 45.3V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H309.5c17 0 33.3 6.7 45.3 18.7l74.5 74.5-33.9 33.9L320.8 84.7c-.3-.3-.5-.5-.8-.8V184c0 13.3-10.7 24-24 24H104c-13.3 0-24-10.7-24-24V80H64c-8.8 0-16 7.2-16 16zm80-16v80H272V80H128zm32 240a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z"/></svg>
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
    let tr = `<div class="row mt-2">
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
        $('#parent').append(tr);
    })
</script>
@stop