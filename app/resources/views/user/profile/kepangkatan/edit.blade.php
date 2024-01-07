@extends('adminlte::page')

@section('title', 'Profile | Kepangkatan')

@section('content_header')
    <div class="d-flex">
        <a href="{{ route('user.home') }}" class="btn p-0">
            <h6>Beranda</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.kepangkatan') }}" class="btn p-0">
            <h6>Profil</h6>
        </a>

        <h6 class="pl-2 pr-2">/</h6>

        <a href="{{ route('user.kepangkatan') }}" class="btn p-0">
            <h6>Kepangkatan</h6>
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
        <h5 class="text-bold">Form Perubahan Golongan/Pangkat</h5>
        <a href="{{ route('user.kepangkatan') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
            <i class="fas fa-arrow-left"></i>
            Kembali
        </a>
    </div>
    <p style="font-size: 14px">Perubahan data ini memerlukan validasi yang akan diproses dalam maksimal 21 hari kerja setelah diajukan</p>

    <div class="table-responsive">
        <table class="table mt-2 border" style="font-size: 14px">
            <tr>
                <th class="w-25"></th>
                <th class="text-center">Data Saat Ini</th>
                <th class="text-center">Data Baru</th>
            </tr>
            <tr>
                <th class="w-25">Golongan/Pangkat</th>
                <td>III/c (Penata)</td>
                <td>Tidak dapat diubah</td>
            </tr>
            <tr>
                <th class="w-25">Nomor SK</th>
                <td>12449/LL9/KP.08.00/2023</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr>
                <th class="w-25">Tanggal SK</th>
                <td>6 Desember 2023</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr>
                <th class="w-25">Terhitung Mulai Tanggal</th>
                <td>1 Januari 2024</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr>
                <th class="w-25">Masa Kerja Golongan (Tahun)</th>
                <td>6</td>
                <td>
                    <input type="text" class="w-100">
                </td>
            </tr>
            <tr>
                <th class="w-25">Masa Kerja Golongan (Bulan)</th>
                <td>0</td>
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
                <th>Jenis Dokumen</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>SK III-C 2023.pdf</td>
                <td>SK Pangkat/Inpassing</td>
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
            <p class="mb-0">Dokumen Bukti</p>
            <p class="mb-0" style="font-style: italic">Mohon melampirkan file gambar asli yang jelas dan tidak blur</p>
        </div>

        <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
            <p class="bg-secondary p-1 pl-2 font-weight-bold">SK Pangkat/Inpassing</p>
            <div class="pl-2 pr-2">
                <p class="m-0 font-weight-bold">
                    Dokumen dilampirkan
                    <span style="color: red">*</span>
                </p>
                <p class="font-italic m-0 pb-1" style="font-size: 12px">(Mohon hanya melampirkan file dengan format pdf, jpg, jpeg, atau png dengan ukuran maksimal 5MB)</p>
                <input type="file" class="w-100" placeholder="Pilih file">
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
                        Dokumen Dilampirkan
                        <span style="color: red">*</span>
                    </p>
                    <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 5MB)</p>
                    <input type="file" class="w-100" placeholder="Pilih file">
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