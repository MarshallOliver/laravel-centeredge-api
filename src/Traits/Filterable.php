<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait Filterable
{

	public static function bootFilterable()
	{

        static::addGlobalScope('filters', function (Builder $builder) {
            $builder->where(request()->filter[Str::plural(strtolower(class_basename(static::class)))] ?? []);
        });

	}

}