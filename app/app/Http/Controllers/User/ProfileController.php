<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        $data = Profile::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        return view('user.personal-data.profile', compact('data'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nidn' => 'required',
            'full_name' => 'required',
            'gender' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'mother_name' => 'required',
            'ktp_image_path' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'kk_image_path' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);
        
        $ktp_file = time(). '.' . $request->ktp_image_path->extension();
        $request->ktp_image_path->move(public_path('file_path/profile/data_pribadi'), $ktp_file);
        
        $kk_file = time(). '.' . $request->kk_image_path->extension();
        $request->kk_image_path->move(public_path('file_path/profile/data_pribadi'), $kk_file);

        Profile::create([
            'user_id' => auth()->user()->id,
            'nidn' => $validated['nidn'],
            'full_name' => $validated['full_name'],
            'gender' => $validated['gender'],
            'place_of_birth' => $validated['place_of_birth'],
            'date_of_birth' => $validated['date_of_birth'],
            'mother_name' => $validated['mother_name'],
            'ktp_image_path' => $request->ktp_image_path->getClientOriginalName(),
            'kk_image_path' => $request->kk_image_path->getClientOriginalName(),
        ]);

        return redirect()->route('user.personal-data');
    }
    
    public function image(Request $request){
        $validated = $request->validate([
            'profile_image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = auth()->user();
        $nama_file = time(). '.' . $request->profile_image_path->extension();
        $request->profile_image_path->move(public_path('file_path/profile/data_pribadi'), $nama_file);
        $data->profile_image_path = $nama_file;
        $data->save();

        return redirect()->route('user.personal-data');
    }
}
