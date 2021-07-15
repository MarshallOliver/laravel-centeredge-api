<?php

namespace AIKG\LaravelCenterEdgeAPI;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use AIKG\LaravelCenterEdgeAPI\Application;
use AIKG\LaravelCenterEdgeAPI\Resources\Application as ApplicationResource;

Route::get('/', 'AIKG\LaravelCenterEdgeAPI\Controllers\ApplicationController@index');
