<?php

namespace AIKG\LaravelCenterEdgeAPI;

use AIKG\LaravelCenterEdgeAPI\ApiModel;

class AreaHold extends ApiModel
{
    protected $table = 'Areas_Holds';
    protected $primaryKey = 'HoldGUID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public $filterable = [ 'start_date_time', 'end_date_time' ];

    public function areas()
    {
        return $this->belongsTo('AIKG\LaravelCenterEdgeAPI\Area', 'AreaGUID', 'AreaGUID');
    }

    public function arrivals()
    {
        return $this->belongsTo('AIKG\LaravelCenterEdgeAPI\Arrival', 'RefID', 'RefID');
    }

}
