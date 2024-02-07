<?php

namespace App\Http\Controllers\User;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\ProfileDocument;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        $data = Profile::where('user_id', auth()->user()->id)->orderByDesc('created_at')->first();
        return view('user.personal-data.profile', compact('data'));
    }

    public function store(Request $request){
        $data = Profile::where('user_id', auth()->user()->id)->where('is_accepted', 'ACCEPTED')->orWhere('is_accepted', 'REJECTED')->orderByDesc('created_at')->first();

        if($data){
            $validated = $request->validate([
                'ktp_image_path' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
                'kk_image_path' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            ]);
        }else{
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
        }
        
        $ktp_file = time(). '.' . $request->ktp_image_path->extension();
        $request->ktp_image_path->move(public_path('file_path/profile/personal-data'), $ktp_file);
        
        $kk_file = time(). '.' . $request->kk_image_path->extension();
        $request->kk_image_path->move(public_path('file_path/profile/personal-data'), $kk_file);

        $profile = Profile::create([
            'user_id' => auth()->user()->id,
            'nidn' => $request->nidn ?? $data->nidn,
            'full_name' => $request->full_name ?? $data->full_name,
            'gender' => $request->gender ?? $data->getRawOriginal('gender'),
            'place_of_birth' => $request->place_of_birth ?? $data->place_of_birth,
            'date_of_birth' => $request->date_of_birth ?? $data->getRawOriginal('date_of_birth'),
            'mother_name' => $request->mother_name ?? $data->mother_name,
            'ktp_image_path' => $ktp_file,
            'kk_image_path' => $kk_file,
            'ktp_name' => $request->ktp_image_path->getClientOriginalName(),
            'kk_name' => $request->kk_image_path->getClientOriginalName(),
        ]);

        if(isset($request->file_path)){
            foreach($request->file_path as $key => $value){  
                $file_path = time(). '.' . $value->extension();
                $value->move(public_path('file_path/profile/personal-data'), $file_path);

                ProfileDocument::create([
                'profile_id' => $profile->id,
                'file_path' => $file_path,
                'file_name' => $value->getClientOriginalName(),
                'description' => $request->description[$key] ?? '-',
            ]);
            }
        }

        return redirect()->route('user.personal-data')->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request){
        $profile = Profile::where('user_id', auth()->user()->id)->where('is_accepted', 'PENDING')->orderByDesc('created_at')->first();

        if($profile){
            $validated = $request->validate([
                'ktp_image_path' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
                'kk_image_path' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            ]);
        }else{
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
        }

        $ktp_file = time(). '.' . $request->ktp_image_path->extension();
        $request->ktp_image_path->move(public_path('file_path/profile/personal-data'), $ktp_file);
        
        $kk_file = time(). '.' . $request->kk_image_path->extension();
        $request->kk_image_path->move(public_path('file_path/profile/personal-data'), $kk_file);

        $profile->update([
            'user_id' => auth()->user()->id,
            'nidn' => $request->nidn ?? $profile->nidn,
            'full_name' => $request->full_name ?? $profile->full_name,
            'gender' => $request->gender ?? $profile->getRawOriginal('gender'),
            'place_of_birth' => $request->place_of_birth ?? $profile->place_of_birth,
            'date_of_birth' => $request->date_of_birth ?? $profile->getRawOriginal('date_of_birth'),
            'mother_name' => $request->mother_name ?? $profile->mother_name,
            'ktp_image_path' => $ktp_file,
            'kk_image_path' => $kk_file,
            'ktp_name' => $request->ktp_image_path->getClientOriginalName(),
            'kk_name' => $request->kk_image_path->getClientOriginalName(),
        ]);

        ProfileDocument::where('profile_id', $profile->id)->delete();
        
        if(isset($request->file_path)){
            foreach($request->file_path as $key => $value){  
                $file_path = time(). '.' . $value->extension();
                $value->move(public_path('file_path/profile/personal-data'), $file_path);

                ProfileDocument::create([
                    'profile_id' => $profile->id,
                    'file_path' => $file_path,
                    'file_name' => $value->getClientOriginalName(),
                    'description' => $request->description[$key] ?? '-',
                ]);
            }
        }

        return redirect()->route('user.personal-data')->with('success', 'Data berhasil disimpan');
    }
    
    public function image(Request $request){
        $validated = $request->validate([
            'profile_image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = auth()->user();
        $nama_file = time(). '.' . $request->profile_image_path->extension();
        $request->profile_image_path->move(public_path('file_path/profile/personal-data'), $nama_file);
        $data->profile_image_path = $nama_file;
        $data->save();

        return redirect()->route('user.personal-data')->with('success', 'Foto berhasil disimpan');
    }
}
