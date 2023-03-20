<?php

namespace App\Filters;

use Closure;

class Status
{
    public function handle($request, Closure $next)
    {
        if (request()->has('status')) {
            return $next($request)->where('status', request()->status);
        }
        return $next($request);
    }
}
