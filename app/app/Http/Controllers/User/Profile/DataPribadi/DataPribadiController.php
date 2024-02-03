<?php

namespace App\Http\Controllers\User\Profile\DataPribadi;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use App\Models\AddressContact;

class DataPribadiController extends Controller
{
    public function index(){
        $biodata = Profile::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        $address = AddressContact::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        return view('user.profile.data-pribadi', compact('biodata', 'address'));
    }
}
