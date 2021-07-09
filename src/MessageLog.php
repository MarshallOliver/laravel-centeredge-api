<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use MarshallOliver\LaravelCenterEdgeAPI\ApiModel;
use Illuminate\Database\Eloquent\Builder;

class MessageLog extends ApiModel
{

	protected $table = 'MessageLog';
    protected $primaryKey = 'MsgID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    
}
