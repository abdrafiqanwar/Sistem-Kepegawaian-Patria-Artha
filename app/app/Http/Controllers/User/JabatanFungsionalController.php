<?php

namespace App\Http\Controllers\User\Profile\JabatanFungsional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JabatanFungsionalController extends Controller
{
    public function index(){
        return view('user.profile.jabatan-fungsional');
    }

    public function detail(){
        return view('user.profile.jabatan-fungsional.detail');
    }

    public function create(){
        return view('user.profile.jabatan-fungsional.new');
    }

    public function edit(){
        return view('user.profile.jabatan-fungsional.edit');
    }
}
