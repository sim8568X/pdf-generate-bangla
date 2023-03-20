<?php

namespace App\Filters;

use Closure;

class OrderBy
{
    public function handle($request, Closure $next)
    {
        if (request()->has('orderby')) {
            return $next($request)->orderBy(request()->orderby,'desc');
        }
        return $next($request);
    }
}
