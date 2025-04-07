<?php

namespace App\Http\Controllers;

use App\Service\User\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Utilities\Constant;

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
            'level' => Constant::user_level_client,
        ];


        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            if (!in_array(Auth::user()->level, [Constant::user_level_client])) {
                Auth::logout();
                return back()->with('notification', 'Bạn không có quyền truy cập.');
            }
            return redirect('/index');
        } else {
            return back()->with('notification', 'Error.');
        }
    
        
    }

    
}
