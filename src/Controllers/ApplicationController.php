<?php

namespace MarshallOliver\LaravelCenterEdgeAPI\Controllers;

use MarshallOliver\LaravelCenterEdgeAPI\Application;
use MarshallOliver\LaravelCenterEdgeAPI\Resources\Application as ApplicationResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

	public function __construct()
	{
		$this->middleware('laravel-centeredge-api.construct.filters');
	}
	
    public function index($database, Request $request)
    {

        return new ApplicationResource(Application::on($database)->first());
    
    }
}
