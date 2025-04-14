<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Utilities\Constant;

class CheckRole
{
    public function handle(Request $request, Closure $next, string $role)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        if (($role === 'employee' && Auth::user()->level !== Constant::user_level_employee) ||
            ($role === 'admin' && Auth::user()->level !== Constant::user_level_admin)) {
            return redirect('admin/login');
        }

        return $next($request);
    }
}
