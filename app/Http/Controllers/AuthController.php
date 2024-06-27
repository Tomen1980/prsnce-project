<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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
        ]);
        if ($user) {
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


    public function dashboard()
    {
        return view('dashboard');

    }

   

}
