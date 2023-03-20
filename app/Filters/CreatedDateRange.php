<?php

namespace App\Filters;

use Closure;

class CreatedDateRange
{
    public function handle($request, Closure $next)
    {
        if (request()->has('date_range')) {

            $dateRange = request()->date_range;
            $explodeArray = explode(',', $dateRange);
            $from = str_replace('_', ' ', $explodeArray[0]);
            $to = str_replace('_', ' ', $explodeArray[1]);
            return $next($request)->whereBetween('created_at', [$from, $to]);
        }

        return $next($request);
    }
}
