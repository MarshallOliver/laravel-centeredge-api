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

	Route::get('areas', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\AreaController@index');
	Route::get('areas/arrivals', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\AreaController@indexWithArrivals');
	Route::get('areas/{area}', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\AreaController@show');
	Route::get('areas/{area}/arrivals', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\AreaController@showWithArrivals');

	Route::get('arrivals', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ArrivalController@index');
	Route::get('arrivals/areas', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ArrivalController@indexWithArrivals');
	Route::get('arrivals/{arrival}', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ArrivalController@show');
	Route::get('arrivals/{arrival}/areas', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ArrivalController@showWithAreas');

	Route::get('application', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\ApplicationController@index');

	Route::get('bookings', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\BookingController@index');

	Route::get('messagelog', 'MarshallOliver\LaravelCenterEdgeAPI\Controllers\MessageLogController@index');

});