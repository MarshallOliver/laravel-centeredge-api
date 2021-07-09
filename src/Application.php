<?php

namespace AIKG\LaravelCenterEdgeAPI;

use AIKG\LaravelCenterEdgeAPI\ApiModel;

class Application extends ApiModel
{
    protected $table = 'ApplicationInfo';
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = false;

}