<?php

/**
 * Customer Controller for Fimiti
 * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
 * @version 1.0
**/

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Customers;
Use App\Wallet;
Use App\DispatchOrders;
Use App\Site;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Resources\CustomersResource;
use App\Http\Resources\DispatchOrdersResources;


class FlamezController extends Controller{


   	public function resolve_payment_status(Request $request){

		$date = date("Y-m-d H:i:s");

		$ord = DispatchOrders::all();
		$ct = 0;
		if($ord){
			foreach ($ord as $key => $value) {
				$p = Site::convert_db_json_to_array($value->payment_info);
				// if($p['confirmed'] == "true" AND $value->status == "awaiting payment"){
				if($value->status == "awaiting payment"){
					$p['confirmed'] = "false";
					$x = Site::convert_db_array_to_json($p);
					echo "$value->status <br/>";
					$ct++;
					$d = DispatchOrders::find($value->id);
					$d->update(["payment_info" => $x]);
					// $d->update(["status" => "payment confirmed"]);
					
				}
			}

			echo "done $ct";
		}
		else{
			echo "nothing";
		}

		
	}
	
}
