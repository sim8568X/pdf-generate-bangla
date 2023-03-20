<?php

namespace App\Filters;

use Closure;

class Order
{
    public function handle($request, Closure $next)
    {
        if (request()->has('order')) {
            return $next($request)->orderBy('id', request()->order);
        }
        return $next($request);
    }
}
