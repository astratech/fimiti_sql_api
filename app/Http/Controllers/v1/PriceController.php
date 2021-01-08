<?php

/**
 * Price Controller for Fimiti
 * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
 * @version 1.0
**/

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Controllers\v1\ZonesController;
use Illuminate\Http\Request;
Use App\Zones;
Use App\Site;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ZonesResource;


/**
 * @group Pricing
 *
*/

class PriceController extends Controller{

	/**
     * Calculate Fee
     *
     * This endpoint allows you to calculate dispatch order fee.
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam pickup_region string required
     * @bodyParam delivery_region string required
    */
	public function calculate_fee(Request $request){
		$validator = Validator::make($request->all(), [
			'pickup_region' => 'required|string',
			'delivery_region' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$z = new ZonesController;
			$p_zone = json_decode(json_encode($z->find_via_region_name($request->pickup_region)))->response;
			$d_zone = json_decode(json_encode($z->find_via_region_name($request->delivery_region)))->response;

			if(is_null($p_zone) OR is_null($d_zone)){
				return ["success"=>false, "response"=>"Error Finding Zone"];
			}
			else{

				if($p_zone == $d_zone){
					$price = 350;
				}
				elseif(($p_zone == "zone 1" AND $d_zone == "zone 2") OR ($p_zone == "zone 2" AND $d_zone == "zone 1")){
					$price = 550;
				}
				elseif(($p_zone == "zone 6" OR $p_zone == "zone 7")){
					$price = 800;
				}
				else{
					$price = 600;
				}

				$data = [
					"price" => $price,
					"pickup_region" => $request->pickup_region,
					"delivery_region" => $request->delivery_region,
					"pickup_zone" => $p_zone,
					"delivery_zone" => $d_zone,
				];

				return ["success"=>true, "response"=>$data];
			}
		}
	}

	/**
     * Region List
     *
     * List all the regions in the system
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
    */
	public function list_all_regions(){
		$regions = [];
		$r = Zones::orderBy("id", "desc")->get();
		foreach ($r as $key => $value) {
			$x = json_decode($value->regions);
			foreach ($x as $z) {
				array_push($regions, $z);
			}
		}
		return ["success"=>true, "response"=>$regions];
	}

}
