<?php

namespace App\Http\Middleware;

use App\Utilities\Constant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckHostLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guest()) {
            return redirect()->guest('employee/login');
        }

        if (Auth::user()->level != Constant::user_level_employee) {
            Auth::logout();
            return redirect()->guest('employee/login');
        }

        return $next($request);
}
}
