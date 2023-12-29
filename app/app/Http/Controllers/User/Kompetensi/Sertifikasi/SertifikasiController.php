<?php

namespace App\Http\Controllers\User\Kompetensi\Sertifikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SertifikasiController extends Controller
{
    public function index(){
        return view('user.kompetensi.sertifikasi');
    }

    public function createDosen(){
        return view('user.kompetensi.sertifikasi.new-dosen');
    }

    public function createProfesi(){
        return view('user.kompetensi.sertifikasi.new-profesi');
    }

    public function editDosen(){
        return view('user.kompetensi.sertifikasi.edit-dosen');  
    }

    public function editProfesi(){
        return view('user.kompetensi.sertifikasi.edit-profesi');  
    }
}
