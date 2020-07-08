<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Controllers;

use MarshallOliver\LaravelCenterEdgeAPI\Booking;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\BookingCollection;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\Booking as BookingResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingController extends Controller
{

	public function __construct()
	{
		$this->middleware('laravel-centeredge-api.construct.filters');
	}

    public function index($database, Request $request)
    {

        return new BookingCollection(
        	Booking::on($database)->with('arrival')->take($request->limit['areas'] ?? 100)->where($request->filter)->get()
        );
    
    }
}
