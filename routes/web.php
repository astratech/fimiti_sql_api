<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any("/", "FrontController@index");

Route::group(['middleware' => 'auth:manager', 'prefix' => 'manager'], function(){
	Route::any('/dashboard', 'Web\ManagerController@index')->name("manager.dashboard");
});