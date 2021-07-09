<?php

namespace AIKG\LaravelCenterEdgeAPI;

use AIKG\LaravelCenterEdgeAPI\ApiModel;
use Illuminate\Database\Eloquent\Builder;
use AIKG\LaravelCenterEdgeAPI\Traits\HasBookings;

class Area extends ApiModel
{

    protected $table = 'Areas';
    protected $primaryKey = 'AreaGUID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function areasSold()
    {
        return $this->hasMany('AIKG\LaravelCenterEdgeAPI\AreaSold', 'AreaGUID', 'AreaGUID');
    }

    public function areasHold()
    {
        return $this->hasMany('AIKG\LaravelCenterEdgeAPI\AreaHold', 'AreaGUID', 'AreaGUID');
    }
    
}
