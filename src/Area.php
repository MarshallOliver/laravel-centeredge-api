<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use MarshallOliver\LaravelCenterEdgeAPI\ApiModel;
use Illuminate\Database\Eloquent\Builder;
use MarshallOliver\LaravelCenterEdgeAPI\Traits\HasBookings;

class Area extends ApiModel
{

    use HasBookings;

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

    protected static function booted()
    {
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('Description', 'asc');
        });
        
    }

    public function arrivals()
    {
        return $this->belongsToMany('MarshallOliver\LaravelCenterEdgeAPI\Arrival', 'GroupAreaBookings', 'AreaGUID', 'RefID')
                    ->withPivot('AreaGUID', 'StartDateTime', 'EndDateTime');
    }

    public function scopeWithLimitedArrivals($query, $filters = [])
    {
        return $query->with(['arrivals' => function ($query) use ($filters) {
            $query->withoutGlobalScope('limits')->limit(request()->limit['arrivals'] ?? 100);
        }]);
    }

}
