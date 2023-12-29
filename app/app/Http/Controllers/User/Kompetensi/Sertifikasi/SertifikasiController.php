<?php

namespace App\Http\Controllers\User\Kompetensi\Sertifikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SertifikasiController extends Controller
{
    public function index(){
        return view('user.kompetensi.sertifikasi');
    }
}
