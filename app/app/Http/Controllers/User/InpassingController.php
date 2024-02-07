<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InpassingController extends Controller
{
    public function index(){
        return view('user.inpassing.index');
    }

    public function detail(){
        return view('user.inpassing.detail');
    }

    public function create(){
        return view('user.inpassing.new');
    }

    public function edit(){
        return view('user.inpassing.edit');
    }
}
