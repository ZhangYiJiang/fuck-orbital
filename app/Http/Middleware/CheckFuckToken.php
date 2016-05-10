<?php

namespace App\Http\Middleware;

use App\Fuck;
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
        $request->fuck->checkToken($request->input('token'));
        return $next($request);
    }
}
