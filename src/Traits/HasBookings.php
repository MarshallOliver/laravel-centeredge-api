<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait HasBookings
{

	public static function bootHasBookings()
	{

        static::addGlobalScope('hasBookings', function (Builder $builder) {

	    	$hasJoinToBookings = function($joins) {
	    		return array_filter($joins, function($join) {
	    			return $join->table == 'GroupAreaBookings';
	    		});
	    	};

        	if($hasJoinToBookings($builder->getQuery()->joins ?? [])) {
        		$builder->where(request()->filter['bookings'] ?? []);
        	}

        });

	}

}