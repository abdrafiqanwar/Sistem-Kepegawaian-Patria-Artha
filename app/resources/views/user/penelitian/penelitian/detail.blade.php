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
            <h6>Detail</h6>
        </a>
    </div>
@stop

@section('content')
    <div class="card p-3">
        <div class="d-flex justify-content-between">
            <h5 class="text-bold">Form Tambah Penelitian</h5>
            <a href="{{ route('user.penelitian') }}" class="btn btn-secondary btn-sm mt-auto mb-auto" style="font-size: 12px; fill: white">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>

        <div class="table-responsive">
            <table class="table mt-2 border" style="font-size: 14px">
                <tr>
                    <th class="w-25">Skim Kegiatan</th>
                    <td>(Tidak ada data)</td>
                </tr>
                <tr>
                    <th class="w-25">Tahun Anggaran</th>
                    <td>2021</td>
                </tr>
                <tr>
                    <th class="w-25">Litabmas Sebelumnya</th>
                    <td>(Tidak ada data)</td>
                </tr>
                <tr>
                    <th class="w-25">Afiliasi</th>
                    <td>Universitas Patria Artha</td>
                </tr>
                <tr>
                    <th class="w-25">Kelompok Bidang</th>
                    <td>ILMU ATAU SAINS LINGKUNGAN</td>
                </tr>
                <tr>
                    <th class="w-25">Nomor SK Penugasan</th>
                    <td>1505/UPA/500/XI/2021</td>
                </tr>
                <tr>
                    <th class="w-25">Tanggal SK Penugasan</th>
                    <td>3 November 2021</td>
                </tr>
                </tr>
                <tr>
                    <th class="w-25">Lama Kegiatan (Tahun)</th>
                    <td>1 Tahun</td>
                </tr>
                </tr>
                <tr>
                    <th class="w-25">Judul Kegiatan</th>
                    <td>Penjaringan Penyamaan Persepsi Kajian Akademis Tentang Biaya Kerugian Lingkungan Provinsi Kalimantan Utara</td>
                </tr>
                </tr>
                <tr>
                    <th class="w-25">Lokasi Kegiatan</th>
                    <td>Provinsi Kalimantan Utara</td>
                </tr>
                </tr>
                <tr>
                    <th class="w-25">Tahun Pelaksanaan Ke</th>
                    <td>1</td>
                </tr>
                <tr>
                    <th class="w-25">Dana dari Dikti (Rp.)</th>
                    <td>0.00</td>
                </tr>
                <tr>
                    <th class="w-25">Dana dari Perguruan Tinggi (Rp.)</th>
                    <td>10000000.00</td>
                </tr>
                <tr>
                    <th class="w-25">Dana dari Institusi Lain (Rp.)</th>
                    <td>80000000.00</td>
                </tr>
                <tr>
                    <th class="w-25">In Kind</th>
                    <td>(Tidak ada data)</td>
                </tr>
            </table>
        </div>

        <div class="d-flex mt-4">
            <i class="fas fa-list"></i>
            <h6 class="text-bold ml-2">Anggota Kegiatan (Dosen)</h6>
        </div>

        <div class="table-responsive">
            <table id="tableDosen" class="table mt-2 table-sm table-bordered" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th>No.</th>
                    <th class="w-75">Nama</th>
                    <th>Peran</th>
                    <th>Aktif</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="w-75">SUHENDRA S</td>
                    <td class="text-center">Anggota</td>
                    <td class="text-center">Ya</td>
                </tr>
            </table>
        </div>

        <div class="d-flex mt-4">
            <i class="fas fa-list"></i>
            <h6 class="text-bold ml-2">Anggota Kegiatan (Mahasiswa)</h6>
        </div>

        <div class="table-responsive">
            <table id="tableMahasiswa" class="table mt-2 table-bordered table-sm" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th>No.</th>
                    <th class="w-75">Nama</th>
                    <th>Peran</th>
                    <th>Aktif</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="w-75">SUHENDRA S</td>
                    <td class="text-center">Anggota</td>
                    <td class="text-center">Ya</td>
                </tr>
                {{-- tampilan jika tidak ada data --}}
                {{-- <tr>
                    <td></td>
                    <th class="text-center">Tidak ada data yang dapat ditampilkan</th>
                    <td></td>
                    <td></td>
                </tr> --}}
            </table>
        </div>

        <div class="d-flex mt-4">
            <i class="fas fa-list"></i>
            <h6 class="text-bold ml-2">Anggota Kegiatan (Kolaborator Eksternal)</h6>
        </div>

        <div class="table-responsive">
            <table id="tableEksternal" class="table mt-2 table-bordered table-sm" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th>No.</th>
                    <th class="w-75">Nama</th>
                    <th>Peran</th>
                    <th>Aktif</th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="w-75">SUHENDRA S</td>
                    <td class="text-center">Anggota</td>
                    <td class="text-center">Ya</td>
                </tr>
                {{-- tampilan jika tidak ada data --}}
                {{-- <tr>
                    <td></td>
                    <th class="text-center">Tidak ada data yang dapat ditampilkan</th>
                    <td></td>
                    <td></td>
                </tr> --}}
            </table>
        </div>

        <div class="d-flex mt-4">
            <i class="fas fa-list"></i>
            <h6 class="text-bold ml-2">Bidang Keilmuan Penelitian</h6>
        </div>

        <div class="table-responsive">
            <table id="tableBidang" class="table mt-2 table-bordered table-sm" style="font-size: 14px">
                <tr class="text-center table-active">
                    <th style="width: 5%">No.</th>
                    <th class="w-75">Nama</th>
                    <th></th>
                </tr>
                <tr>
                    <td class="text-center">1</td>
                    <td class="w-75">SUHENDRA S</td>
                    <td></td>
                </tr>
                {{-- tampilan jika tidak ada data --}}
                {{-- <tr>
                    <td></td>
                    <th class="text-center">Tidak ada data yang dapat ditampilkan</th>
                    <td></td>
                </tr> --}}
            </table>
        </div>

        <p class="bg-secondary p-1 pl-2 font-weight-bold m-0" style="font-size: 14px">Dokumen</p>
        <div class="table-responsive">
            <table class="table table-bordered" style="font-size: 14px">
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama File</th>
                    <th>Nama Dokumen</th>
                    <th>Jenis Dokumen</th>
                    <th>Tanggal Upload</th>
                    <th>Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>SK III-C 2023.pdf</td>
                    <td>SK III-C 2023</td>
                    <td>SK Penugasan</td>
                    <td>4 April 2022</td>
                    <td>
                        <a href="" class="" style="fill: cornflowerblue; color: cornflowerblue; font-size: 14px">
                            <i class="fas fa-search"></i>
                            Lihat Dokumen
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop