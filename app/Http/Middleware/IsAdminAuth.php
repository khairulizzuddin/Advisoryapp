<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()?->role_type !== 'a') {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}

