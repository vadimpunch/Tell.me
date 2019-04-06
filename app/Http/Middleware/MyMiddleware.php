<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $param)
    {
        if ($request->route('page')!= 'pages' && $param == 'admin') {
            return redirect()->route('home');
        }
        return $next($request);
    }
}
