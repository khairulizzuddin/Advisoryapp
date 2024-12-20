<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the authenticated user has the role_type 'a' (admin)
        if (auth()->user()->role_type != 'a') {
            return redirect('/')->with('error', "You don't have admin access.");// Allow the request to proceed
        }

        // Redirect to the homepage with an error message
        
        return $next($request);
    }
}