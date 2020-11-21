<?php

/**
 * Zones Controller for Fimiti
 * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
 * @version 1.0
**/

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Zones;
Use App\Site;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ZonesResource;

class ZonesController extends Controller{

	public function index(){
		$r = Zones::orderBy("id", "desc")->get();
		$r = ZonesResource::collection($r);
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
			'name' => 'required|string|unique:zones',
			'regions' => 'string|required',
		]);


		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$n = NULL;

			if(!is_null($request->regions)){
				$n = [];
				foreach(json_decode($request->regions) as $key => $value) {
					$value = strtolower($value);
					array_push($n, "$value");
				}
			}

       		// sanitize inputs
			$data = [
				"name" => strtolower($request->name),
				"regions" => is_null($request->regions) ? $n : json_encode($n),
			];

			$r = Zones::create($data);
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
		if($data){
			return ["success"=>true, "response"=>$data];
		}
		else{
			return ["success"=>false, "response"=>"record not found"];
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
