<?php

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

// Route::middleware('auth:api')->any('/user', 'v1\TestController@index');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => 'cors', 'middleware' => 'auth:api', 'prefix' => 'v1'], function() {
// Route::group(['middleware' => 'cors', 'prefix' => 'v1'], function() {
	Route::any('test', 'v1\TestController@index');

	Route::get('tokens', 'v1\AccessController@index');
	Route::post('tokens/create', 'v1\AccessController@create');

	Route::get('list/regions/all', 'v1\ZonesController@list_all_regions');

	Route::get('zones', 'v1\ZonesController@index');
	Route::post('zones', 'v1\ZonesController@create');
	Route::post('zones/{id}', 'v1\ZonesController@update');
	Route::post('zones/regions/delete/{zone_id}', 'v1\ZonesController@delete_region');
	Route::post('zones/delete/{id}', 'v1\ZonesController@delete');

	Route::post('customers/register', 'v1\CustomerController@register');


	Route::get('find/zone/via/region/{region}', 'v1\ZonesController@find_via_region_name');

	Route::post('calculate/fee', 'v1\PriceController@calculate_fee');

	Route::get('orders/dispatch', 'v1\DispatchOrdersController@index');
	Route::post('orders/dispatch', 'v1\DispatchOrdersController@create');
	Route::get('orders/dispatch/{id}', 'v1\DispatchOrdersController@show');
	
});

Route::any('test', 'v1\TestController@index');
Route::any('failed', 'v1\TestController@auth_failed')->name("failed");