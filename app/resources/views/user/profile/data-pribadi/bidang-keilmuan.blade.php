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

    <a href="{{ route('user.bidang-keilmuan') }}" class="btn p-0">
        <h6>Bidang Keilmuan</h6>
    </a>
</div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Bidang Keilmuan Saya</h5>
            <a href="{{ route('user.data-pribadi') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
        <p style="font-size: 14px">Perubahan data ini tidak memerlukan validasi dan dapat langsung disimpan ke sistem</p>

        <div class="table-responsive">
            <table class="table border-left border-right border-bottom" style="font-size: 14px">
                <tr>
                    <th class="w-75">Pilih Kelompok Bidang</th>
                    <th class="text-center">Aksi</th>
                </tr>
                <tr>
                    <td class="w-75">   
                        <select class="form-select w-100 form-control form-control-sm" aria-label="Small select example">
                            <option selected>Pilih...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-primary pt-1 pb-1" style="fill: white; font-size: 14px">
                            <i class="fas fa-save"></i>
                            Simpan
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop