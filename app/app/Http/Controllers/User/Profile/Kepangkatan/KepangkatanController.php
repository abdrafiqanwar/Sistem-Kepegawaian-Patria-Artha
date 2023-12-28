<?php

namespace App\Http\Controllers\User\Profile\Kepangkatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepangkatanController extends Controller
{
    public function index(){
        return view('user.profile.kepangkatan');
    }
}
