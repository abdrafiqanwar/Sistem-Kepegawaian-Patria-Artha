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

        <form action="{{ route('user.alamat-kontak.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="table-responsive">
            <table class="table mt-2 border-left border-right border-bottom" style="font-size: 14px">
                <tr>
                    <th class="w-25"></th>
                    <th class="text-center w-25">Data Saat Ini</th>
                    <th class="text-center">Data Baru</th>
                </tr>
                <tr>
                    <th class="w-25">Email</th>
                    <td class="w-25">{{ $data->email ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm  @error('email') is-invalid @enderror" name="email" value="{{ $data->email ?? '' }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Alamat</th>
                    <td class="w-25">{{ $data->address ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm  @error('address') is-invalid @enderror" name="address" value="{{ $data->address ?? '' }}">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="w-25">RT</th>
                    <td class="w-25">{{ $data->rt ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm  @error('rt') is-invalid @enderror" name="rt" value="{{ $data->rt ?? '' }}">
                        @error('rt')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="w-25">RW</th>
                    <td class="w-25">{{ $data->rw ?? 'Belum ada data' }}</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm  @error('rw') is-invalid @enderror" name="rw" value="{{ $data->rw ?? '' }}">
                        @error('rw')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Dusun</th>
                    <td class="w-25">{{ $data->sub_village ?? 'Belum ada data' }}</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm  @error('sub_village') is-invalid @enderror" name="sub_village" value="{{ $data->sub_village ?? '' }}">
                        @error('sub_village')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Desa/Kelurahan</th>
                    <td class="w-25">{{ $data->village ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm  @error('village') is-invalid @enderror" name="village" value="{{ $data->village ?? '' }}">
                        @error('village')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Kota/Kabupaten/Kecamatan</th>
                    <td class="w-25">{{ $data->city_discrict_sub_district ?? 'Belum ada data'}}</td>
                    <td>
                        <select class="form-select w-100 h-100 form-control form-control-sm" aria-label="Small select example" name="city_discrict_sub_district">
                            <option selected value="{{ $data->city_discrict_sub_district ?? '' }}">{{ $data->city_discrict_sub_district ?? 'Pilih...' }}</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </td>
                </tr>
                <tr>
                    <th class="w-25">Kode Pos</th>
                    <td class="w-25">{{ $data->postal_code ?? 'Belum ada data' }}</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm  @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ $data->postal_code ?? '' }}">
                        @error('postal_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="w-25">No. Telepon Rumah</th>
                    <td class="w-25">{{ $data->home_phone_number ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm  @error('home_phone_number') is-invalid @enderror" name="home_phone_number" value="{{ $data->home_phone_number ?? '' }}">
                        @error('home_phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th class="w-25">No. HP</th>
                    <td class="w-25">{{ $data->phone_number ?? 'Belum ada data'}}</td>
                    <td>
                        <input type="text" class="w-100 form-control form-control-sm  @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $data->phone_number ?? '' }}">
                        @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
            </table>
        </div>

        <div class="row">
            <div class="col-lg-4 font-weight-bold" style="font-size: 12px">
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
                    <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 2MB)</p>
                    <input type="file" accept=".pdf, .jpg, .jpeg, .png" class="w-100 @error('file_doc') is-invalid @enderror" placeholder="Pilih file" name="file_doc">
                    @error('file_doc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <p class="m-0 mt-2 font-weight-bold pb-1">Nama Dokumen</p>
                    <input type="text" class="w-100 form-control form-control-sm @error('file_name') is-invalid @enderror" name="file_name" value="{{ old('file_name') }}">
                    @error('file_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <p class="m-0 mt-2 font-weight-bold pb-1">Keterangan</p>
                    <input type="text" class="w-100 form-control form-control-sm @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <p class="m-0 mt-2 font-weight-bold pb-1">Jenis Dokumen</p>
                    <select class="form-select w-100 form-control form-control-sm @error('document_type_id') is-invalid @enderror" aria-label="Small select example" name="document_type_id">
                        <option selected value="{{ old('document_type_id') }}">Pilih...</option>
                        @foreach($doc as $row)
                        <option value="{{ $row->id }}">{{ $row->document_type }}</option>
                        @endforeach
                    </select>
                    @error('document_type_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="" id="parent">
        </div>

        <div class="row mt-2">
            <div class="col-lg-4" style="font-size: 12px">
            </div>
            <div class="col d-flex justify-content-end" style="font-size: 14px">
                <button class="btn btn-primary" type="submit" style="fill: white; font-size: 14px">
                    <i class="fas fa-save"></i>
                    Simpan
                </button>
            </div>
        </div>
        </form>

        <div class="row mt-2">
            <div class="col-lg-4" style="font-size: 12px">
            </div>
            <div class="col d-flex" style="font-size: 14px">
                <button id="tambah" class="btn p-0 font-weight-bold" style="color: cornflowerblue; font-size: 14px">
                    Tambah dokumen lain
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
                        <p class="font-italic m-0 pb-1" style="font-size: 12px">(Jenis file yang diijinkan: pdf, jpg, jpeg, png dengan ukuran maksimal 2MB)</p>
                        <input type="file" class="w-100" placeholder="Pilih file" accept=".pdf, .jpg, .jpeg, .png">
                        <p class="m-0 mt-2 font-weight-bold pb-1">Nama Dokumen</p>
                        <input type="text" class="w-100 form-control form-control-sm">
                        <p class="m-0 mt-2 font-weight-bold pb-1">Keterangan</p>
                        <input type="text" class="w-100 form-control form-control-sm">
                        
                        <p class="m-0 mt-2 font-weight-bold pb-1">Jenis Dokumen</p>
                        <select class="form-select w-100 form-control form-control-sm" aria-label="Small select example">
                            <option selected>Pilih...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
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