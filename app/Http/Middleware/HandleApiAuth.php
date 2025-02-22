<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleApiAuth
{
    public function handle(Request $request, Closure $next)
    {
        if ($token = $request->bearerToken()) {
            $request->headers->set('Authorization', 'Bearer ' . $token);
        }

        return $next($request);
    }
} 