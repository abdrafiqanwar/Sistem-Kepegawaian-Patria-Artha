<?php

namespace App\Http\Controllers\User\Penelitian\Penelitian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index(){
        return view('user.penelitian.penelitian');
    }

    public function detail(){
        return view('user.penelitian.penelitian.detail');
    }

    public function create(){
        return view('user.penelitian.penelitian.new');
    }

    public function edit(){
        return view('user.penelitian.penelitian.edit');
    }
}
