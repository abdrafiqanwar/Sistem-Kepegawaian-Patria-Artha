<?php

namespace App\Http\Controllers\User\Penelitian\Penelitian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    public function index(){
        return view('user.penelitian.penelitian');
    }

    public function create(){
        return view('user.penelitian.penelitian.new');
    }
}
