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
            return redirect()->guest('host/login');
        }

        if (Auth::user()->level != Constant::user_level_host) {
            Auth::logout();
            return redirect()->guest('host/login');
        }

        return $next($request);
}
}
