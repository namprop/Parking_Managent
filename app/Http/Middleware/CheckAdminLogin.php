<?php

namespace App\Http\Middleware;

use App\Utilities\Constant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdminLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->level !== Constant::user_level_admin) {
            return redirect('/'); 
        }

        return $next($request);
    }
}