<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AddressContact;
use App\Models\AddressContactDocument;

class AddressContactController extends Controller
{
    public function index(){
        $data = AddressContact::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        return view('user.personal-data.address-contact', compact('data'));
    }
    
    public function store(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'address' => 'required',
            'ktp_image_path' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $ktp_image_path = time(). '.' . $request->ktp_image_path->extension();
        $request->ktp_image_path->move(public_path('file_path/profile/data_pribadi'), $ktp_image_path);

        AddressContact::create([
            'user_id' => auth()->user()->id,
            'email' => $validated['email'],
            'address' => $validated['address'],
            'rt' => $request->rt,
            'rw' => $request->rw,
            'village' => $request->village,
            'sub_village' => $request->sub_village,
            'city_discrict_sub_district' => $request->city_discrict_sub_district,
            'postal_code' => $request->postal_code,
            'home_phone_number' => $request->home_phone_number,
            'phone_number' => $request->phone_number,
            'ktp_image_path' => $request->ktp_image_path->getClientOriginalName(),
        ]);

        return redirect()->route('user.personal-data');
    }
}
