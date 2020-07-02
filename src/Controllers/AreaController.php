<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Controllers;

use MarshallOliver\LaravelCenterEdgeAPI\Area;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\AreaCollection;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\Area as AreaResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AreaController extends Controller
{
    public function areas($database, Request $request)
    {

        return new AreaCollection(Area::on($database)->take($request->limit ?? 100)->get());
    
    }

    public function areasWithArrivals($database, Request $request)
    {

        return new AreaCollection(Area::on($database)->with('arrivals')->take($request->limit ?? 100)->get());
    
    }

    public function area($database, $area, Request $request)
    {

        return new AreaResource(Area::on($database)->findOrFail($area));

    }

    public function areaWithArrivals($database, $area, Request $request)
    {

        return new AreaResource(Area::on($database)->with('arrivals')->findOrFail($area));
    
    }

    public function areaWithArrival($database, $area, $arrival, Request $request)
    {
        return new AreaResource(Area::on($database)->with(['arrivals' => function ($query) use ($arrival) {
            $query->where('GroupArrivals.RefID', $arrival);
        }])->findOrFail($area));
    }
}