<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

<<<<<<< HEAD
    public function registerForm(){
        return view('register');
=======
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

    public function dashboard()
    {
        return view('dashboard');
>>>>>>> origin/staging
    }
}


