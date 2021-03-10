<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->age <= 20) {
            return "You are not allowed to enter, because your age is not sufficient.";
        }
        return $next($request);
    }
}
