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
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
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
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                            Lihat Dokumen
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop