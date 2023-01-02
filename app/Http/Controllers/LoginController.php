<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    //
    public function loginPage(){
        return view('login');
    }

    public function adminPage(){
        return view('admin');
    }

    public function userPage(){
        return view('user');
    }

    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if($request->remember){
            Cookie::queue('mycookie', $request->email, 120);
        }

        if(Auth::attempt($credentials)){
            Session::put('mysession', $credentials);
            return redirect('/');
        }



        return 'fail';
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
