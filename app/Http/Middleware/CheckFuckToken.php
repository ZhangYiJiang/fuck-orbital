<?php

namespace App\Http\Middleware;

use Closure;

class CheckFuckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->route('fuck')->checkToken($request->input('token'));
        return $next($request);
    }
}
