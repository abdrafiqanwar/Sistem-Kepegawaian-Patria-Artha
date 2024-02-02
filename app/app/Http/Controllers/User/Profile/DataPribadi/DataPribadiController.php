<?php

namespace App\Http\Controllers\User\Profile\DataPribadi;

use Illuminate\Http\Request;
use App\Models\LecturerProfile;
use App\Http\Controllers\Controller;
use App\Models\LecturerAddressContact;

class DataPribadiController extends Controller
{
    public function index(){
        $biodata = LecturerProfile::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        $address = LecturerAddressContact::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        return view('user.profile.data-pribadi', compact('biodata', 'address'));
    }
}
