<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function admin(){
        return view ("master.dashboard.login");
    }


    public function login(Request $request){

        $request -> validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request -> only('email', 'password');

        if(Auth::attempt($credentials)){
            $request -> session()->regenerate();
            return redirect ('/admin');
        }
        
        return back()->withErrors([
            'Error' => 'email atau kata sandi salah'
        ]);
    }


    public function logout(){

    }
}
