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
        $request->ktp_image_path->move(public_path('file_path/profile/personal-data'), $ktp_file);
        
        $kk_file = time(). '.' . $request->kk_image_path->extension();
        $request->kk_image_path->move(public_path('file_path/profile/personal-data'), $kk_file);

        $data = Profile::create([
            'user_id' => auth()->user()->id,
            'nidn' => $validated['nidn'],
            'full_name' => $validated['full_name'],
            'gender' => $validated['gender'],
            'place_of_birth' => $validated['place_of_birth'],
            'date_of_birth' => $validated['date_of_birth'],
            'mother_name' => $validated['mother_name'],
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
                'profile_id' => $data->id,
                'file_path' => $file_path,
                'file_name' => $value->getClientOriginalName(),
                'description' => $request->description[$key] ?? '-',
            ]);
            }
        }

        return redirect()->route('user.personal-data')->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request){
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
        $request->ktp_image_path->move(public_path('file_path/profile/personal-data'), $ktp_file);
        
        $kk_file = time(). '.' . $request->kk_image_path->extension();
        $request->kk_image_path->move(public_path('file_path/profile/personal-data'), $kk_file);

        $data = Profile::where('user_id', auth()->user()->id)->where('is_accepted', 'PENDING')->orderByDesc('created_at')->first();
        $data->update([
            'user_id' => auth()->user()->id,
            'nidn' => $validated['nidn'],
            'full_name' => $validated['full_name'],
            'gender' => $validated['gender'],
            'place_of_birth' => $validated['place_of_birth'],
            'date_of_birth' => $validated['date_of_birth'],
            'mother_name' => $validated['mother_name'],
            'ktp_image_path' => $ktp_file,
            'kk_image_path' => $kk_file,
            'ktp_name' => $request->ktp_image_path->getClientOriginalName(),
            'kk_name' => $request->kk_image_path->getClientOriginalName(),
        ]);

        if(isset($request->file_path)){
            ProfileDocument::where('profile_id', $data->id)->delete();

            foreach($request->file_path as $key => $value){  
                $file_path = time(). '.' . $value->extension();
                $value->move(public_path('file_path/profile/personal-data'), $file_path);

                ProfileDocument::create([
                    'profile_id' => $data->id,
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
