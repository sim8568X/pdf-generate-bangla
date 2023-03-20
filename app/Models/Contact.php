<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';


    /**
     * @param $query
     * @return void
     */
    public function scopeFilter($query)
    {
        $query->when(request()->has('id'), function () use ($query) {
            $query->orWhere('id', request()->id);
        });

        $query->when(request()->has('name'), function () use ($query) {
            $search = request()->name;
            $query->orWhere('name', 'LIKE', "%{$search}%");
        });

        $query->when(request()->has('address'), function () use ($query) {
            $search = request()->address;
            $query->orWhere('address', 'LIKE', "%{$search}%");
        });

    }
}
