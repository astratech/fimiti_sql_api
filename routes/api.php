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


	Route::get('flz/11', 'v1\FlamezController@resolve_payment_status');

	Route::get('list/regions/all', 'v1\ZonesController@list_all_regions');

	Route::post('admin/login', 'v1\LoginController@admin_login');

	Route::get('zones', 'v1\ZonesController@index');
	Route::post('zones', 'v1\ZonesController@create');
	Route::post('zones/{id}', 'v1\ZonesController@update');
	Route::post('zones/regions/delete/{zone_id}', 'v1\ZonesController@delete_region');
	Route::post('zones/delete/{id}', 'v1\ZonesController@delete');

	Route::post('customers/register', 'v1\CustomerController@register');
	Route::post('customers/login', 'v1\CustomerController@login');
	Route::post('customers/validate_login', 'v1\CustomerController@validate_login');
	Route::get('customers/all', 'v1\CustomerController@all_customers');
	Route::post('customers/update/password/{id}', 'v1\CustomerController@change_password');
	Route::post('customers/update/email/{id}', 'v1\CustomerController@change_email');
	Route::post('customers/update/mobile/{id}', 'v1\CustomerController@change_mobile');
	Route::post('customers/wallet/credit/{id}', 'v1\CustomerController@wallet_credit');
	Route::get('customers/wallet/history/{id}', 'v1\CustomerController@wallet_history');
	Route::get('customers/single/{id}', 'v1\CustomerController@single_customer');

	Route::get('customers/orders/unpaid/{user_id}', 'v1\CustomerController@orders_unpaid');
	Route::get('customers/orders/all/{user_id}', 'v1\CustomerController@all_orders');
	Route::get('customers/orders/undelivered/{user_id}', 'v1\CustomerController@undelivered_orders');

	Route::post('customers/place/order/{id}', 'v1\CustomerController@place_order');
	Route::post('customers/wallet/debit/{id}', 'v1\CustomerController@pay_via_wallet');

	Route::get('ppp/decode/{password}', 'v1\CustomerController@decode_password');


	Route::get('find/zone/via/region/{region}', 'v1\ZonesController@find_via_region_name');

	Route::post('calculate/fee', 'v1\PriceController@calculate_fee');

	Route::get('orders/dispatch', 'v1\DispatchOrdersController@index');
	Route::get('orders/dispatch/{id}', 'v1\DispatchOrdersController@show');
	Route::post('orders/finalize/{id}', 'v1\DispatchOrdersController@finalize');
	Route::post('orders/dispatch/delete/{id}', 'v1\DispatchOrdersController@delete');
	
});

Route::any('test', 'v1\TestController@index');
Route::any('failed', 'v1\TestController@auth_failed')->name("failed");