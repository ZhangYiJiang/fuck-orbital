<?php

namespace App\Http\Middleware;

use Closure;

class JsonpResponse
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
        $response = $next($request);

        if ($request->input('callback')) {
            $response->setCallback($request->input('callback'));
        }

        return $response;
    }
}
