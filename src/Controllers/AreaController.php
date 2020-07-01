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
    public function index($database, Request $request)
    {

        return new AreaCollection(Area::on($database)->take($request->limit['areas'] ?? 100)->orderBy('description', 'asc')->get());
    
    }

    public function indexWithArrivals($database, Request $request)
    {

        return new AreaCollection(Area::on($database)->with(['arrivals' => function ($query) use ($request) {
            $query->with(['bookings' => function ($query) use ($request) {
                $query->take($request->limit['bookings'] ?? 100);
            }])->take($request->limit['arrivals'] ?? 100);
        }])->take($request->limit['areas'] ?? 100)->get());
    
    }

    public function show($database, $area, Request $request)
    {

        return new AreaResource(Area::on($database)->findOrFail($area));

    }

    public function showWithArrivals($database, $area, Request $request)
    {
        return new AreaResource(Area::on($database)->with(['arrivals' => function ($query) use ($request) {
            $query->with(['bookings' => function ($query) use ($request) {
                $query->take($request->limit['bookings'] ?? 100);
            }])->where($request->filter)->take($request->limit['arrivals'] ?? 100);
        }])->find($area));
    }
}