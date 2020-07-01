<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'Areas';
    protected $primaryKey = 'AreaGUID';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    const fieldMap = [
        'table' => 'Areas',
        'fields' => [
            'area_guid' => 'AreaGUID',
            'description' => 'Description',
            'show_area' => 'ShowArea',
            'area_type' => 'AreaType',
            'capacity' => 'Capacity',
            'min_capacity' => 'Min_Capacity',
            'pre_arrival_minutes' => 'PreArrivalMinutes',
            'post_departure_minutes' => 'PostDepartureMinutes',
            'area_shown_at' => 'AreaShownAt',
            'min_deposit_amount' => 'Min_DepositAmount',
            'open_area_desc' => 'OpenAreaDesc',
            'web_enabled' => 'WebEnabled',
            'inv_id' => 'InvID',
            'web_capacity' => 'WebCapacity',
            'short_details' => 'ShortDetails',
            'long_details' => 'LongDetails',
            'thumbnail' => 'Thumbnail',
            'picture' => 'Picture',
            'show_capacity' => 'ShowCapacity',
            'laser_tag_area' => 'LaserTagArea',
            'go_kart_area' => 'GoKartArea',
        ],
    
    ];

    const base64 = [
        'thumbnail',
        'picture',
    ];

    public function arrivals() {
    	return $this->belongsToMany('MarshallOliver\LaravelCenterEdgeAPI\Arrival', 'GroupAreaBookings', 'AreaGUID', 'RefID')->withPivot('EventDate', 'StartDateTime', 'EndDateTime');
    }

}
