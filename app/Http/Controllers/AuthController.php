<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\absensiModel;
use Carbon\Carbon;


class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }


    public function registerForm()
    {
        return view('register');
    }

    public function loginAuth(Request $request)
    {
        // return dd($request->all());
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/dashboard')->with('success', 'Login Success');
        }

        return redirect('/')->with('error', 'email or password incorrect');
    }

    public function register(Request $request)
    {
        // return dd($request->all());
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'password2' => 'required',
            'noTelp'=>'required|min:10|max:13',
    
        ]);

        if ($credentials['password'] != $credentials['password2']) {
            return redirect('/register')->with('error', 'password not match');
        }

        $exist=User::where('email',$credentials['email'])->first();
        if($exist){
            return redirect('/register')->with('error', 'email already exist');
        }

        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
            'noTelp'=>$credentials['noTelp'],
            'role'=>'4dm1n'
        ]);
        if ($user) {
            // return dd($user);
            return redirect('/')->with('success', 'Register Success');
        }
        else{
            return redirect('/register')->with('error', 'Register Failed');
        }

    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }


   

    public function updateProfile(Request $request)
    {
        $validation = $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'oldPass' => 'required|min:8',
            'password' => 'nullable|min:8',
            'passwordVerify' => 'nullable|min:8'
        ]);

        $verifyData = User::find(Auth::user()->id);

        if($request->oldPass == null){
            return back()->with('error', 'Old Password must be filled');
        }else{
            if(!Hash::check($request->oldPass, $verifyData->password)){
                return back()->with('error', 'Old Password not match');
            }
        }
        if($request->password == null){
            $password = $verifyData->password;
        }else{
            if($request->password != $request->passwordVerify){
                return back()->with('error', 'password not match');
            }else{
                $password = Hash::make($request->password);
            }
        }

       if ($request->hasFile('image') != null) {
            $image = $request->file('image');
            $hashImage = $image->hashName();
            $image->storeAs('/public/users/', $hashImage);
            if($verifyData->image != "default.png"){
                Storage::disk('local')->delete('public/users/'.$verifyData->image);
            }
        }else{
            $hashImage = $verifyData->image;
        }

        $user = User::find(Auth::user()->id)->update([
            'image' => $hashImage,
            'password' => $password,
        ]);
       

        return redirect('/dashboard')->with('success', 'Update Success');
    }
   
    public function dashboard()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $Absen = absensiModel::where('id_user',Auth::user()->id)->where('tanggal',$currentDate)->exists();
        return view('dashboard',[
            'absen' => $Absen
        ]);

    }
}
