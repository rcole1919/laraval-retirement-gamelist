<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckDemo
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
        if (in_array($request->name, ['demo', 'settings', 'list', 'table'])) {
            return $next($request);
        }
        return abort(404);
    }
}
