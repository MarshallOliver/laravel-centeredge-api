<?php

namespace AIKG\LaravelCenterEdgeAPI;

use AIKG\LaravelCenterEdgeAPI\ApiModel;
use Illuminate\Database\Eloquent\Builder;
use AIKG\LaravelCenterEdgeAPI\Traits\HasBookings;

class Arrival extends ApiModel
{

    protected $table = 'GroupArrivals';
    protected $primaryKey = 'RefID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function areas()
    {
    	return $this->belongsToMany('AIKG\LaravelCenterEdgeAPI\Area', 'GroupAreaBookings', 'RefID', 'AreaGUID')
    				->withPivot('RefID', 'StartDateTime', 'EndDateTime');
    }

}
