<?php

namespace App\Http\Controllers\User\Profile\Kepangkatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepangkatanController extends Controller
{
    public function index(){
        return view('user.profile.kepangkatan');
    }

    public function detail(){
        return view('user.profile.kepangkatan.detail');
    }

    public function create(){
        return view('user.profile.kepangkatan.new');
    }
}
