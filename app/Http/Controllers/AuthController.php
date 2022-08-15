<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{   
    public function doLogin(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        dd('fake');
    }

    public function login(){
        return view('admin.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
