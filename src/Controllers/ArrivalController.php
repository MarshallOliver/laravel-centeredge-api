<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Controllers;

use MarshallOliver\LaravelCenterEdgeAPI\Arrival;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\ArrivalCollection;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\Arrival as ArrivalResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArrivalController extends Controller
{
    public function arrivals($database, Request $request)
    {

    	return new ArrivalCollection(Arrival::on($database)->take($request->count ?? 100)->get());
    
    }

    public function arrivalsWithAreas($database, Request $request)
    {

        return new ArrivalCollection(Arrival::on($database)->with('areas')->take($request->limit ?? 100)->get());
    
    }

    public function arrival($database, $arrival, Request $request)
    {

        return new ArrivalResource(Arrival::on($database)->findOrFail($arrival));

    }

    public function arrivalWithAreas($database, $arrival, Request $request)
    {

        return new ArrivalResource(Arrival::on($database)->with('areas')->findOrFail($arrival));
    
    }

    public function arrivalWithArea($database, $arrival, $area, Request $request)
    {

    	return new ArrivalResource(Arrival::on($database)->with(['areas' => function ($query) use ($area) {
            $query->where('Areas.AreaGUID', $area);
        }])->findOrFail($arrival));
    
    }
}