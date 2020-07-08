<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use MarshallOliver\LaravelCenterEdgeAPI\ApiModel;

class MessageLog extends ApiModel
{
	protected $table = 'MessageLog';
    protected $primaryKey = 'MsgID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    const fieldMap = [
    	'table' => 'MessageLog',
		'fields' => [	    
			'message_id' => 'MsgID',
			'message_date_time' => 'MsgDateTime',
			'station_no' => 'StationNo',
			'program_name' => 'ProgramName',
			'emp_no' => 'EmpNo',
			'message_text' => 'MessageText',
			'stack_trace' => 'StackTrace',
			'error' => 'Error',
		    
		],

	];

	const base64 = [

    ];

        protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('MsgDateTime', 'desc');
        });
        
    }
    
}
