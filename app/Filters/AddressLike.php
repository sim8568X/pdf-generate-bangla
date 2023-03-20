<?php

namespace App\Filters;

use Closure;

class AddressLike
{
    public function handle($request, Closure $next)
    {
        if (request()->has('address')) {
            $address = request()->address;
            return $next($request)->orWhere('address', 'LIKE', "%{$address}%");
        }

        return $next($request);
    }
}
