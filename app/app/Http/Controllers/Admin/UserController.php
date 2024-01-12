<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.data-user', compact('users'));
    }

    public function create(){
        return view('admin.data-user.new');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email:dns',
            // 'role' => 'required',
            'password' => 'required',
        ]);

        User::create($validated);

        return redirect()->route('admin.data-user')->with('success', 'Data dosen berhasil ditambahkan.');
    }

    public function destroy($id){
        User::find($id)->delete();
    }
}
