<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use App\Models\AddressContact;

class PersonalDataController extends Controller
{
    public function index(){
        $biodata = Profile::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        $address = AddressContact::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        return view('user.personal-data.index', compact('biodata', 'address'));
    }
}
