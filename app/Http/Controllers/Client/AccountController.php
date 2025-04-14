<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    public function login()
    {

        return view('user.account.login');
    }

    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'level' => Constant::user_level_client,
        ];


        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            if (!in_array(Auth::user()->level, [Constant::user_level_employee])) {
                Auth::logout();
                return back()->with('notification', 'Bạn không có quyền truy cập.');
            }
            return redirect('/index');
        } else {
            return back()->with('notification', 'Error.');
        }
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect('/');
    }
}
