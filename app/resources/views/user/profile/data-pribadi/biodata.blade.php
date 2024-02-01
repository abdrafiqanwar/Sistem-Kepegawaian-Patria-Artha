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
        <h6>Biodata</h6>
    </a>
</div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Formulir Ajuan Perubahan Data Profil</h5>
            <a href="{{ route('user.data-pribadi') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
        <p style="font-size: 14px">Perubahan data ini memerlukan validasi yang akan diproses dalam maksimal 21 hari kerja setelah diajukan</p>

        <form action="{{ route('user.biodata.store') }}" method="POST">
            @csrf
            <div class="table-responsive">
                <table class="table border-left border-right border-bottom" style="font-size: 14px">
                    <tr>
                        <th class="w-25"></th>
                        <th class="text-center w-25">Data Saat Ini</th>
                        <th class="text-center">Data Baru</th>
                    </tr>
                    <tr>
                        <th class="w-25">NIDN</th>
                        <td class="w-25">{{ $data->nidn ?? 'Belum ada data' }}</td>
                        <td>
                            <input type="text" class="w-100 form-control form-control-sm" name="nidn" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Nama</th>
                        <td class="w-25">{{ $data->full_name ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="text" class="w-100 form-control form-control-sm" name="full_name" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Jenis Kelamin</th>
                        <td class="w-25">{{ $data->gender ?? 'Belum ada data' }}</td>
                        <td>
                            <select class="form-select w-100 h-100 form-control form-control-sm" aria-label="Small select example" name="gender" required>
                                <option value="">Pilih...</option>
                                <option value="MALE">Laki-Laki</option>
                                <option value="FEMALE">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Tempat Lahir</th>
                        <td class="w-25">{{ $data->place_of_birth ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="text" class="w-100 form-control form-control-sm" name="place_of_birth" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Tanggal Lahir</th>
                        <td class="w-25">{{ $data->date_of_birth ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="date" class="w-100 form-control form-control-sm" name="date_of_birth" required>
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Nama Ibu Kandung</th>
                        <td class="w-25">{{ $data->mother_name ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="text" class="w-100 form-control form-control-sm" name="mother_name" required>
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
                    <p class="bg-secondary p-1 pl-2 font-weight-bold">KTP</p>
                    <div class="pl-2 pr-2">
                        <p class="m-0 font-weight-bold">
                            Dokumen Dilampirkan
                            <span style="color: red">*</span>
                        </p>
                        <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 5MB)</p>
                        <input type="file" class="w-100" placeholder="Pilih file" name="ktp_image_path" required>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-4" style="font-size: 12px">
                </div>

                <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
                    <p class="bg-secondary p-1 pl-2 font-weight-bold">Kartu Keluarga</p>
                    <div class="pl-2 pr-2">
                        <p class="m-0 font-weight-bold">
                            Dokumen Dilampirkan
                            <span style="color: red">*</span>
                        </p>
                        <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 5MB)</p>
                        <input type="file" class="w-100" placeholder="Pilih file" name="kk_image_path" required>
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
                    <button class="btn btn-primary" type="submit" style="fill: white; font-size: 14px">
                        <i class="fas fa-save"></i>
                        Simpan
                    </button>
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