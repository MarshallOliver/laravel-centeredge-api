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

}