<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserIsLoggedIn
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('tracer_study_id')) {
            return redirect('/tracer-study#login');
        }

        return $next($request);
    }
}
