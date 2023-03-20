<?php

namespace App\Filters;

use Closure;

class NameLike
{
    public function handle($request, Closure $next)
    {
        if (request()->has('name')) {
            $name = request()->name;
            return $next($request)->orWhere('name', 'LIKE', "%{$name}%");
        }

        return $next($request);
    }
}
