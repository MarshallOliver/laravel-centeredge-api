<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use MarshallOliver\LaravelCenterEdgeAPI\Traits\Filterable;
use Staudenmeir\EloquentEagerLimit\HasEagerLimit;
use MarshallOliver\LaravelCenterEdgeAPI\Traits\Limitable;
use Illuminate\Database\Eloquent\Model;

class ApiModel extends Model
{

	use Filterable;
	use HasEagerLimit;
	use Limitable;

	protected function scopeWithLimited($token, $query, $filters = [])
	{
		return $query->with([$token => function ($query) use ($filters) {
			$query->withoutGlobalScope('limits')->limit(request()->limit[$token] ?? 100);
		}]);
	}

}