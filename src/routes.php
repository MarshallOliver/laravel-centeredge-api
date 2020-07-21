<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['api'], 'prefix' => 'api/catalog/{database}'], function () {

	Route::get('application', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ApplicationController@index');

	Route::get('messagelog', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\MessageLogController@index');

	Route::get('areas', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\AreaController@areas');
	Route::get('areas/arrivals', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\AreaController@areasWithArrivals');
	Route::get('areas/{area_guid}', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\AreaController@area');
	Route::get('areas/{area_guid}/arrivals', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\AreaController@areaWithArrivals');
	Route::get('areas/{area_guid}/arrivals/{ref_id}', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\AreaController@areaWithArrival');

	Route::get('arrivals', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ArrivalController@arrivals');
	Route::get('arrivals/areas', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ArrivalController@arrivalsWithAreas');
	Route::get('arrivals/{ref_id}', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ArrivalController@arrival');
	Route::get('arrivals/{ref_id}/areas', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ArrivalController@arrivalWithAreas');
	Route::get('arrivals/{ref_id}/areas/{area_guid}', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ArrivalController@arrivalWithArea');

	Route::get('categories', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\CategoryController@categories');

});