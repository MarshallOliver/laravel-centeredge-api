<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Controllers;

use MarshallOliver\LaravelCenterEdgeAPI\Arrival;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\ArrivalCollection;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\Arrival as ArrivalResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArrivalController extends Controller
{

    public function __construct()
    {
        $this->middleware('laravel-centeredge-api.construct.filters');
    }

    public function arrivals($database, Request $request)
    {

    	return new ArrivalCollection(Arrival::on($database)->get());
    
    }

    public function arrivalsWithAreas($database, Request $request)
    {

        return new ArrivalCollection(Arrival::on($database)->withLimitedAreas()->get());
    
    }

    public function arrival($database, $arrival, Request $request)
    {

        return new ArrivalResource(Arrival::on($database)->findOrFail($arrival));

    }

    public function arrivalWithAreas($database, $arrival, Request $request)
    {

        return new ArrivalResource(Arrival::on($database)->withLimitedAreas()->findOrFail($arrival));
    
    }

    public function arrivalWithArea($database, $arrival, $area, Request $request)
    {

    	return new ArrivalResource(Arrival::on($database)->with(['areas' => function ($query) use ($area) {
            $query->where('Areas.AreaGUID', $area);
        }])->findOrFail($arrival));
    
    }
}