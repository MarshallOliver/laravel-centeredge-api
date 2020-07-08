<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait Limitable
{

	public static function bootLimitable()
	{

        static::addGlobalScope('limits', function (Builder $builder) {
            $builder->limit(request()->limit[Str::plural(strtolower(class_basename(static::class)))] ?? 100);
        });

	}

}