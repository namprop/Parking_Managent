<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Utilities\Constant;

class HomeController extends Controller
{
    //
    public function getLogin()
    {
        return view('admin.login');
    }
    public function postLogin(Request $request)
{
    $credentials = $request->only('email', 'password');
    $remember = $request->has('remember');

    if (Auth::attempt($credentials, $remember)) {
        $user = Auth::user();
        
        if (!in_array($user->level, [Constant::user_level_admin, Constant::user_level_employee])) {
            Auth::logout();
            return back()->with('notification', 'Bạn không có quyền truy cập.');
        }
        if ($user->level === Constant::user_level_admin) {
            return redirect()->intended('admin/vehicle');
        } else {
            return redirect()->intended('employee/vehicle');
        }
    }

    return back()->with('notification', 'Tài khoản hoặc mật khẩu không chính xác');
}


    public function logout()
    {

        Auth::logout();

        return redirect('/admin/login');
    }
}
