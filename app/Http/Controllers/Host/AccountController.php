<?php

namespace App\Http\Controllers\Host;

use App\Http\Controllers\Controller;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    //
    public function getLogin()
    {
        return view('host.account.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $remember = $request->has('remember');


        if (Auth::attempt($credentials, $remember)) {
            if (!in_array(Auth::user()->level, [Constant::user_level_host])) {
                Auth::logout();
                return back()->with('notification', 'Bạn không có quyền truy cập.');
            }
            return redirect('host/vehicle');
        } else {
            return back()->with('notification', 'Tài khoản mật khẩu không chính xác');
        }
    }

    public function logout()
    {

        Auth::logout();

        return redirect('/host/login');
    }
}
