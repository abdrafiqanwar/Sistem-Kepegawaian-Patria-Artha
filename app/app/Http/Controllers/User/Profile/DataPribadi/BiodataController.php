<?php

namespace App\Http\Controllers\User\Profile\DataPribadi;

use Illuminate\Http\Request;
use App\Models\LecturerProfile;
use App\Http\Controllers\Controller;

class BiodataController extends Controller
{
    public function index(){
        $data = LecturerProfile::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        return view('user.profile.data-pribadi.biodata', compact('data'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nidn' => 'required|unique:lecturer_profile,nidn',
            'full_name' => 'required',
            'gender' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'mother_name' => 'required',
            'ktp_image_path' => 'required',
            'kk_image_path' => 'required',
        ]);

        LecturerProfile::create([
            'user_id' => auth()->user()->id,
            'nidn' => $validated['nidn'],
            'full_name' => $validated['full_name'],
            'gender' => $validated['gender'],
            'place_of_birth' => $validated['place_of_birth'],
            'date_of_birth' => $validated['date_of_birth'],
            'mother_name' => $validated['mother_name'],
            'ktp_image_path' => $validated['ktp_image_path'],
            'kk_image_path' => $validated['kk_image_path'],
        ]);

        return redirect()->route('user.data-pribadi');
    }
}
