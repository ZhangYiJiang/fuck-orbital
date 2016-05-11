<?php

namespace App\Http\Middleware;

use Closure;

class ApiPagesize
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
        $pagesize = $request->input('pagesize', config('api.pagesize.default'));
        $pagesize = min($pagesize, config('api.pagesize.max'));
        $request->merge(compact('pagesize'));

        return $next($request);
    }
}
