@extends('adminlte::page')

@section('title', 'Profile | Data Pribadi')

@section('content_header')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.personal-data') }}">Profile</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.personal-data') }}">Data Pribadi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Biodata</li>
    </ol>
</nav>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Formulir Ajuan Perubahan Data Profil</h5>
            <a href="{{ route('user.personal-data') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
        <p style="font-size: 14px">Perubahan data ini memerlukan validasi yang akan diproses dalam maksimal 21 hari kerja setelah diajukan</p>

        <form action="{{ route('user.profile.store') }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" class="w-100 form-control form-control-sm @error('nidn') is-invalid @enderror" name="nidn" value="{{ $data->nidn ?? '' }}">
                            @error('nidn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Nama</th>
                        <td class="w-25">{{ $data->full_name ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="text" class="w-100 form-control form-control-sm @error('full_name') is-invalid @enderror" name="full_name" value="{{ $data->full_name ?? '' }}">
                            @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Jenis Kelamin</th>
                        @if($data)
                            @if($data->gender == 'MALE')
                            <td class="w-25">Laki-Laki</td>
                            @elseif($data->gender == 'FEMALE')
                            <td class="w-25">Perempuan</td>
                            @endif
                        @else
                            <td>Belum ada data</td>
                        @endif
                        <td>
                            <select class="form-select w-100 h-100 form-control form-control-sm @error('gender') is-invalid @enderror" aria-label="Small select example" name="gender">
                                <option selected value="{{ $data->gender ?? '' }}">
                                    @if($data)
                                        @if($data->gender == 'MALE')
                                        Laki-Laki
                                        @elseif($data->gender == 'FEMALE')
                                        Perempuan
                                        @endif
                                    @else
                                        Pilih...
                                    @endif
                                </option>
                                @if($data)
                                    @if($data->gender == 'FEMALE')
                                    <option value="MALE">Laki-Laki</option>
                                    @elseif($data->gender == 'MALE')
                                    <option value="FEMALE">Perempuan</option>
                                    @endif
                                @else
                                <option value="MALE">Laki-Laki</option>
                                <option value="FEMALE">Perempuan</option>
                                @endif
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Tempat Lahir</th>
                        <td class="w-25">{{ $data->place_of_birth ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="text" class="w-100 form-control form-control-sm @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{ $data->place_of_birth ?? '' }}">
                            @error('place_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Tanggal Lahir</th>
                        <td class="w-25">{{ $data->date_of_birth ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="date" class="w-100 form-control form-control-sm @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ $data->date_of_birth ?? '' }}">
                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th class="w-25">Nama Ibu Kandung</th>
                        <td class="w-25">{{ $data->mother_name ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="text" class="w-100 form-control form-control-sm @error('mother_name') is-invalid @enderror" name="mother_name" value="{{ $data->mother_name ?? '' }}">
                            @error('mother_name')
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
                            <p class="mb-0">- KK</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="p-2"></div> --}}
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
                                <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="w-100 @error('ktp_image_path') is-invalid @enderror" placeholder="Pilih file" name="ktp_image_path">
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
                                <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="w-100 @error('kk_image_path') is-invalid @enderror" placeholder="Pilih file" name="kk_image_path">
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

            {{-- <div class="font-weight-bold w-50" style="font-size: 12px">
                <p class="mb-0">Dokumen Bukti</p>
                <p>Mohon melampirkan file gambar asli yang jelas dan tidak blur</p>
                <p>Dokumen yang dilampirkan adalah dokumen wajib dan dokumen yang sesuai dengan data yang diusulkan.</p>
                <p class="mb-0">Dokumen Wajib:</p>
                <p class="mb-0">- KTP</p>
                <p class="mb-0">- KK</p>
            </div>

            <div class="row border d-block mt-2" style="font-size: 14px">
                <p class="bg-secondary font-weight-bold py-1 pl-2 mb-2">KTP</p>
                <div class="pl-2 pr-2 mb-2">
                    <p class="m-0 font-weight-bold">
                        Dokumen Dilampirkan
                        <span style="color: red">*</span>
                    </p>
                    <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 2MB)</p>   
                    <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="w-100 @error('ktp_image_path') is-invalid @enderror" placeholder="Pilih file" name="ktp_image_path">
                    @error('ktp_image_path')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="row border d-block mt-2" style="font-size: 14px">
                <p class="bg-secondary font-weight-bold py-1 pl-2 mb-2">KK</p>
                <div class="pl-2 pr-2 mb-2">
                    <p class="m-0 font-weight-bold">
                        Dokumen Dilampirkan
                        <span style="color: red">*</span>
                    </p>
                    <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 2MB)</p>   
                    <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="w-100 @error('kk_image_path') is-invalid @enderror" placeholder="Pilih file" name="kk_image_path">
                    @error('kk_image_path')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="" id="parent">
            </div>

            <div class="mt-2 d-flex justify-content-between">
                <button id="tambah" type="button" class="btn p-0 font-weight-bold" style="color: cornflowerblue; font-size: 14px">
                    Tambah dokumen lain
                </button>
                <button class="btn btn-primary" type="submit" style="fill: white; font-size: 14px">
                    <i class="fas fa-save"></i>
                    Simpan
                </button>
            </div> --}}
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
                    <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="w-100 @error('ktp_image_path') is-invalid @enderror" placeholder="Pilih file" name="ktp_image_path">
                    @error('ktp_image_path')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
            </div>`;

            // let tr = `<div class="row mt-2" id="dokumen-${i}">
            //     <div class="col-lg-4" style="font-size: 12px">
            //     </div>
    
            //     <div class="col border pb-3 pl-0 pr-0" style="font-size: 14px">
            //         <div class="d-flex justify-content-between bg-secondary" style="margin-bottom: 16px">
            //             <p class="p-1 pl-2 font-weight-bold mb-auto">Dokumen</p>
            //             <button dokumen-id="${i}" class="btn pt-0 pb-0" style="font-size: 12px; fill: white">
            //                 <i class="fas fa-times" style="color:white"></i>
            //             </button>
            //         </div>
    
            //         <div class="pl-2 pr-2">
            //             <p class="m-0 font-weight-bold">
            //                 Dokumen Dilampirkan
            //                 <span style="color: red">*</span>
            //             </p>
            //             <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 2MB)</p>
            //             <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="w-100" placeholder="Pilih file">
            //         </div>
            //     </div>
            // </div>`;

        $('#parent').append(tr);
        }       
        
        $('#parent').on('click', 'button', function(){
            let id = $(this).attr('dokumen-id');
            $(`#dokumen-${id}`).remove();
        })
    </script>
@stop