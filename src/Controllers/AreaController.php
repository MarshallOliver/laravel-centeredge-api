<?php

namespace AIKG\LaravelCenterEdgeAPI\Controllers;

use AIKG\LaravelCenterEdgeAPI\Area;
use AIKG\LaravelCenterEdgeAPI\AreaSold;
use AIKG\LaravelCenterEdgeAPI\AreaHold;
use AIKG\LaravelCenterEdgeAPI\Resources\Area as AreaResource;
use AIKG\LaravelCenterEdgeAPI\Resources\Booking as BookingResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function index($database)
    {
    
        return AreaResource::collection(Area::on($database)->get());

    }

    public function area($database, $area_guid) 
    {

        return new AreaResource(Area::on($database)->findOrFail($area_guid));

    }

    public function areaBookings($database, $area_guid, Request $request) 
    {
    
        $areasHold = AreaSold::on($database)
            ->select('RefID', 'AreaGUID', 'SubAreaGUID', 'SlotGUID', 'EventDate', 'StartDateTime', 'EndDateTime', 'Quantity', 'ActQuantity')
            ->where('AreaGUID', $area_guid)
            ->with('arrivals');

        $areasSold = AreaHold::on($database)
            ->select('RefID', 'AreaGUID', 'SubAreaGUID', 'SlotGUID', 'EventDate', 'StartDateTime', 'EndDateTime', 'Quantity', 'ActQuantity')
            ->where('AreaGUID', $area_guid)
            ->with('arrivals');

        $areasHold = $this->filterBookings($areasHold, $request);
        $areasSold = $this->filterBookings($areasSold, $request);

        return BookingResource::collection($areasHold->union($areasSold)->orderBy('StartDateTime')->get());

    }

    public function areaBooking($database, $area_guid, $ref_id) 
    {

        $areasHold = AreaSold::on($database)
            ->select('RefID', 'AreaGUID', 'SubAreaGUID', 'SlotGUID', 'EventDate', 'StartDateTime', 'EndDateTime', 'Quantity', 'ActQuantity')
            ->where('AreaGUID', $area_guid)
            ->where('RefID', $ref_id)
            ->with('arrivals');

        $areasSold = AreaHold::on($database)
            ->select('RefID', 'AreaGUID', 'SubAreaGUID', 'SlotGUID', 'EventDate', 'StartDateTime', 'EndDateTime', 'Quantity', 'ActQuantity')
            ->where('AreaGUID', $area_guid)
            ->where('RefID', $ref_id)
            ->with('arrivals');

        $areasHold = $this->filterBookings($areasHold, $request);
        $areasSold = $this->filterBookings($areasSold, $request);

        return BookingResource::collection($areasSold->union($areasHold)->orderBy('StartDateTime')->get());
    
    }

    private function filterBookings($query, Request $request)
    {

        if ($request->filter) {

            foreach ($request->filter as $field => $arguments) {

               if ($field == 'start_date_time' || $field == 'end_date_time') {

                    $field = $field == 'start_date_time' ? 'StartDateTime' : 'EndDateTime';
               
                    foreach ($arguments as $operator => $value) {

                        switch ($operator) {

                            case ('e'):
                                $query = $query->where($field, '=', $value);
                                break;

                            case ('gt'):
                                $query = $query->where($field, '>', $value);
                                break;

                            case ('lt'):
                                $query = $query->where($field, '<', $value);
                                break;

                            case ('gte'):
                                $query = $query->where($field, '>=', $value);
                                break;

                            case ('lte'):
                                $query = $query->where($field, '<=', $value);
                                break;

                            case ('ne'):
                                $query = $query->where($field, '<>', $value);
                                break;

                            default:
                                abort(500);

                        }

                    }
               
                } else {

                    abort(500);

               }
            
            }

        }

        return $query;

    }

}