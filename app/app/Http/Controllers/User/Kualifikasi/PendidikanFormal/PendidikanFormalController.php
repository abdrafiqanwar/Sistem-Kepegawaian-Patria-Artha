<?php

namespace App\Http\Controllers\User\Kualifikasi\PendidikanFormal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendidikanFormalController extends Controller
{
    public function index(){
        return view('user.kualifikasi.pendidikan-formal');
    }

    public function detail(){
        return view('user.kualifikasi.pendidikan-formal.detail');
    }

    public function create(){
        return view('user.kualifikasi.pendidikan-formal.new');
    }

    public function edit(){
        return view('user.kualifikasi.pendidikan-formal.edit');
    }
}
