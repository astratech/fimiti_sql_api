<?php

/**
 * DispatchOrders Controller for Fimiti
 * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
 * @version 1.0
**/

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\DispatchOrders;
Use App\Site;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\DispatchOrdersResources;

class DispatchOrdersController extends Controller{

	public function index(){
		// $r = DispatchOrders::orderBy("id", "desc")->get();
		$r = DispatchOrdersResources::collection(DispatchOrders::all());
		return ["success"=>true, "response"=>$r];
	}

	/**
     * Show single record
     *
     * @param  int 	$id
     * @return JSON
    */
	public function show($id){
		$data = DispatchOrders::find($id);
		if($data){
			return ["success"=>true, "response"=>$data];
			
		}
		else{
			return ["success"=>false, "response"=>"record not found"];
		}
	}

	/**
     * delete single record
     *
     * @param  int 	$id
     * @return JSON
    */
	public function delete($id){
		$record = DispatchOrders::find($id);
		if($record){
			$record->delete();
			return ["success"=>true, "response"=>"record deleted"];
		}
		else{
			return ["success"=>false, "response"=>"record not found"];
		}
	}
}
