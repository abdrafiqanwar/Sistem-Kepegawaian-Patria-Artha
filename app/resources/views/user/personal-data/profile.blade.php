@extends('adminlte::page')

@section('title_prefix', 'Data Pribadi')

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

        <form action="{{ route('user.profile.store') }}" method="POST" enctype="multipart/form-data" id="form">
            @csrf
            <div class="table-responsive">
                <table class="table border" style="font-size: 14px">
                    <tr>
                        <th class="w-25"></th>
                        <th class="text-center w-25">Data Saat Ini</th>
                        <th class="text-center">Data Baru</th>
                    </tr>
                    <tr>
                        <th>NIDN</th>
                        <td>{{ $data->nidn ?? 'Belum ada data' }}</td>
                        <td>
                            <input type="text" class="form-control form-control-sm @error('nidn') is-invalid @enderror" name="nidn" value="{{ old('nidn') }}">
                            @error('nidn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $data->full_name ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="text" class="form-control form-control-sm @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}">
                            @error('full_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $data->gender ?? 'Belum ada data' }}</td>
                        <td>
                            <select class="form-select form-control form-control-sm @error('gender') is-invalid @enderror" aria-label="Small select example" name="gender">
                                <option selected value="{{ old('gender') }}">
                                    @if( old('gender') == 'MALE')
                                    Laki-Laki
                                    @elseif( old('gender') == 'FEMALE')
                                    Perempuan
                                    @else
                                    Pilih...
                                    @endif
                                </option>
                                <option value="MALE">Laki-Laki</option>
                                <option value="FEMALE">Perempuan</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td>{{ $data->place_of_birth ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="text" class="form-control form-control-sm @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{ old('place_of_birth') }}">
                            @error('place_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td>{{ $data->date_of_birth ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="date" class="form-control form-control-sm @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}">
                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Nama Ibu Kandung</th>
                        <td>{{ $data->mother_name ?? 'Belum ada data'}}</td>
                        <td>
                            <input type="text" class="form-control form-control-sm @error('mother_name') is-invalid @enderror" name="mother_name" value="{{ old('mother_name') }}">
                            @error('mother_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </td>
                    </tr>
                </table>
            </div>

            {{-- @foreach($data->documents as $doc)
                <a href="{{ asset('file_path/profile/personal-data/'.$doc->file_doc) }}">file</a>
                <p>{{ $doc->description }}</p>
            @endforeach --}}

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
    <script>
        @if($data)
            @if($data->is_accepted == 'PENDING')
                $('#form').attr("action", "{{ route('user.profile.update') }}")
            @endif
        @endif
    </script>
@stop