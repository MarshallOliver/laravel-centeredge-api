<?php

namespace AIKG\LaravelCenterEdgeAPI\Controllers;

use AIKG\LaravelCenterEdgeAPI\Application;
use AIKG\LaravelCenterEdgeAPI\Resources\Application as ApplicationResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
	
    public function index($database, Request $request)
    {

        return new ApplicationResource(Application::on($database)->first());
    
    }
}
