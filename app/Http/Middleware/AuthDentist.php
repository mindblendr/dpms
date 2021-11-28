<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthDentist
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
        if ($request->user()->user_type != 'dentist') {
            return response([
                'message' => 'Unauthorized!'
            ], 403);
        }
        return $next($request);
    }
}
