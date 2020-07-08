<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Controllers;

use MarshallOliver\LaravelCenterEdgeAPI\Area;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\AreaCollection;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\Area as AreaResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function __construct()
    {
        $this->middleware('laravel-centeredge-api.construct.filters');
    }

    public function areas($database, Request $request)
    {

        return new AreaCollection(Area::on($database)->get());
    
    }

    public function areasWithArrivals($database, Request $request)
    {

        return new AreaCollection(Area::on($database)->withLimitedArrivals()->get());

    }

    public function area($database, $area, Request $request)
    {

        return new AreaResource(Area::on($database)->findOrFail($area));

    }

    public function areaWithArrivals($database, $area, Request $request)
    {

        return new AreaResource(Area::on($database)->withLimitedArrivals()->findOrFail($area));
    
    }

    public function areaWithArrival($database, $area, $arrival, Request $request)
    {

        return new AreaResource(Area::on($database)->with(['arrivals' => function ($query) use ($arrival) {
            $query->where('GroupArrivals.RefID', $arrival);
        }])->findOrFail($area));
    
    }
}