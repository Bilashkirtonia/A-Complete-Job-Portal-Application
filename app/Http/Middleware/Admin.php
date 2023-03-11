<?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;

// class Admin
// {
//     public function handle(Request $request, Closure $next)
//     {
//         return $next($request);
//     }
// }



namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Admin extends Middleware
{
   
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}

