<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    public function login( ){

        return view('front.account.login');
    }

    public function checkLogin(Request $request){
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'level' => 0,
        ];


        if (Auth::attempt($credentials)) {
            return 'Success';
        } else {
            return 'fail';
        }
        
    }

    
}
