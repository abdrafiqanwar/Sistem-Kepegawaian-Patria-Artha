<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if($user->role == 'ADMIN'){
                return redirect()->intended('admin');
            }else{
                return redirect()->intended('user');
            }
        }

        return redirect()->back()->withInput()->with('error', 'Email atau password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function request(){
        return view('auth.passwords.email');
    }

    public function email(Request $request){
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );
    
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function reset($token){
        return view('auth.passwords.reset', ['token' => $token]);
    }

    public function update(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    public function setting(){
        return view('auth.setting');
    }

    public function changePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return redirect()->back()->with('error', 'Password lama tidak sesuai');
        }

        if($request->new_password != $request->confirm_password){
            return redirect()->back()->with('error', 'Password baru tidak sama');
        }

        if($request->new_password == $request->old_password){
            return redirect()->back()->with('error', 'Password baru tidak boleh sama dengan password lama');
        }

        auth()->user()->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->back()->with('success', 'Password berhasil diubah');
    }
}
