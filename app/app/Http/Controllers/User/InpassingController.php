<?php

namespace App\Http\Controllers\User\Profile\Inpassing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InpassingController extends Controller
{
    public function index(){
        return view('user.profile.inpassing');
    }

    public function detail(){
        return view('user.profile.inpassing.detail');
    }

    public function create(){
        return view('user.profile.inpassing.new');
    }

    public function edit(){
        return view('user.profile.inpassing.edit');
    }
}
