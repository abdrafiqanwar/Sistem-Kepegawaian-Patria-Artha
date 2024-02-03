<?php

namespace App\Http\Controllers\User\Profile\DataPribadi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AddressContact;
use App\Models\AddressContactDocument;

class AlamatController extends Controller
{
    public function index(){
        $data = AddressContact::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        return view('user.profile.data-pribadi.alamat-kontak', compact('data', 'doc'));
    }
    
    public function store(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'address' => 'required',
            'file_doc' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'file_name' => 'required',
            'document_type_id' => 'required',
        ]);

        $file_doc = time(). '.' . $request->file_doc->extension();
        $request->file_doc->move(public_path('file_path/profile/data_pribadi'), $file_doc);

        $data = AddressContact::create([
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
        ]);

        AddressContactDocument::create([
            'lac_id' => $data->id,
            'file_doc' => $file_doc,
            'file_name' => $validated['file_name'],
            'description' => $request->description,
            'document_type_id' => $request->document_type_id,
        ]);

        return redirect()->route('user.data-pribadi');
    }
}
