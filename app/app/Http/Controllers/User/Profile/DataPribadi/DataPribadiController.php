<?php

namespace App\Http\Controllers\User\Profile\DataPribadi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataPribadiController extends Controller
{
    public function index(){
        return view('user.profile.data-pribadi');
    }
}
