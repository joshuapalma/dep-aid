<?php

namespace App\Pipelines\Search;

use Illuminate\Database\Eloquent\Builder;
use Closure;

class SearchPatientTable
{
    public function handle(Builder $query, Closure $next)
    {
        if (request()->has('search')) {
            $query->where(function($query){
                $query->orWhere('patient_name', 'LIKE', "%".request('search')."%")
                    ->orWhere('remarks', 'LIKE', "%".request('search')."%");
            });
        }
        $next($query);
    }
}