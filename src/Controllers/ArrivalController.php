<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Controllers;

use MarshallOliver\LaravelCenterEdgeAPI\Arrival;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\ArrivalCollection;
use MArshallOliver\LaravelCenterEdgeAPI\Resources\Arrival as ArrivalResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArrivalController extends Controller
{
    public function index($database, Request $request)
    {
    	return new ArrivalCollection(Arrival::on($database)->take($request->count ?? 100)->orderBy($request->order['arrivals'] ?? 'TimeCreated', 'desc')->get());
    }

    public function areaIndex($database, $area, Request $request)
    {
        return new ArrivalCollection(Arrival::on($database)->with('areas')->where([['AreaGUID', '=', $area], ['StartDateTime', '=', '05/29/2020']])->take($request->count ?? 100)->get());
    }

    public function indexWithAreas(Request $request)
    {
    	return new ArrivalCollection(Arrival::on($request->database)->with('areas')->take($request->limit ?? 100)->get());
    }

    public function show($database, $arrival, Request $request)
    {
    	return new ArrivalResource(Arrival::on($database)->findOrFail($arrival));
    }

    public function showWithAreas($database, $arrival, Request $request)
    {
    	return new ArrivalResource(Arrival::on($database)->with('areas')->findOrFail($arrival));
    }
}