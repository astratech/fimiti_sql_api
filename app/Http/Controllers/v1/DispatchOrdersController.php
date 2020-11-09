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

class DispatchOrdersController extends Controller{

	public function index(){
		$r = DispatchOrders::orderBy("id", "desc")->get();
		return ["success"=>true, "response"=>$r];
	}

	/**
     * Create record
     *
     * @param  string 	$title
     * @param  string 	$name
     * @param  string 	$role
     * @return JSON
    */
	public function create(Request $request){
		
		
		$validator = Validator::make($request->all(), [
			'user_id' => 'required|numeric',
			'courier' => 'string|required',
			'pickup_info' => 'array',
			'delivery_info' => 'array',
			'package_info' => 'array',
			'timeline' => 'array',
			'pricing' => 'array',
			'rider_info' => 'array',
			'payment_info' => 'array',
		]);

		// dd($request->delivery_info);


		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{
			$data = [
				"user_id" => $request->user_id,
				"courier" => $request->courier,
				"pickup_info" => is_null($request->pickup_info) ? null : json_encode($request->pickup_info),
				"delivery_info" => is_null($request->delivery_info) ? null : json_encode($request->delivery_info),
				"package_info" => is_null($request->package_info) ? null : json_encode($request->package_info),
				"timeline" => is_null($request->timeline) ? null : json_encode($request->timeline),
				"pickup_info" => is_null($request->pickup_info) ? null : json_encode($request->pickup_info),
				"pickup_info" => is_null($request->pickup_info) ? null : json_encode($request->pickup_info),
			];
			$r = DispatchOrders::create($data);
			return ["success"=>true, "response"=>$r];
			
		}
		
	}

	/**
     * Show single record
     *
     * @param  int 	$id
     * @return JSON
    */
	public function show($id){
		$data = Zones::find($id);
		if(is_null($data)){
			return ["success"=>false, "response"=>"record not found"];
		}
		else{
			return ["success"=>true, "response"=>$data];
		}
	}

	/**
     * update single record
     *
     * @param  int 		$id
     * @param  string 	$name
     * @param  int 	$price
     * @return JSON
    */
	public function update($id, Request $request){
		$validator = Validator::make($request->all(), [
			'name' => 'required|string',
			'regions' => 'string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$record = Zones::find($id);
			// return ["success"=>false, "response"=>json_decode($record->regions)];

			if($record){
				$n = $record->regions;

				if(!is_null($request->regions)){
					$n = (is_null($record->regions)) ? [] : json_decode($record->regions);
					foreach(json_decode($request->regions) as $key => $value) {
						$value = strtolower($value);
						array_push($n, "$value");
					}
				}

				// sanitize inputs
				$data = [
					"name" => empty($request->name) ? $record->name : strtolower($request->name),
					"regions" => is_null($request->regions) ? $n : json_encode($n),
				];

				$record->update($data);
				return ["success"=>true, "response"=>$record];

			}
			else{
				return ["success"=>false, "response"=>"record not found"];
			}
		}
	}

	/**
     * update product category record - to add new category
     *
     * @param  int 		$id
     * @param  array 	$catogeries
     *
     * @return JSON
    */
	public function delete_region($zone_id, Request $request){
		$validator = Validator::make($request->all(), [
			'region' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$record = Zones::find($zone_id);
			if($record){

				$n = json_decode($record->regions);
				$n = array_merge(array_diff($n, array("$request->region")));
				$record->update(["regions"=>$n]);
				return ["success"=>true, "response"=>$record];
			}
			else{
				return ["success"=>false, "response"=>"record not found"];
			}
		}
	}

	/**
     * delete single record
     *
     * @param  int 	$id
     * @return JSON
    */
	public function delete($id){
		$record = Zones::find($id);
		if($record){
			$record->delete();
			return ["success"=>true, "response"=>"record deleted"];
		}
		else{
			return ["success"=>false, "response"=>"record not found"];
		}
	}
}
