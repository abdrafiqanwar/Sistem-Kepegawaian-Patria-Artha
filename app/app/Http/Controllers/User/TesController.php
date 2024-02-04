<?php

namespace App\Http\Controllers\User\Kompetensi\Tes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index(){
        return view('user.kompetensi.tes');
    }

    public function create(){
        return view('user.kompetensi.tes.new');
    }
}
