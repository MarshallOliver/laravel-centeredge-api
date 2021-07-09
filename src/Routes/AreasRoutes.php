<?php

namespace AIKG\LaravelCenterEdgeAPI;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', 'AIKG\LaravelCenterEdgeAPI\Controllers\AreaController@index');
Route::get('/{area_guid}', 'AIKG\LaravelCenterEdgeAPI\Controllers\AreaController@area');
Route::get('/{area_guid}/bookings', 'AIKG\LaravelCenterEdgeAPI\Controllers\AreaController@areaBookings');
Route::get('/{area_guid}/bookings/{ref_id}', 'AIKG\LaravelCenterEdgeAPI\Controllers\AreaController@areaBooking');