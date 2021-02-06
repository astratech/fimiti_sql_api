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
Use App\Customers;
Use App\Site;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\DispatchOrdersResources;


/**
 * @group Dispatch Orders
 *
 * APIs
 */
class DispatchOrdersController extends Controller{

	/**
     * All Dispatch Orders List
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     *
    */
	public function index(){
		$r = DispatchOrdersResources::collection(DispatchOrders::all());
		return ["success"=>true, "response"=>$r];
	}

	/**
     * Single Dispatch Record
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam id number required
     *
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
     * Debit Customer Wallet
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam order_id number required
     * @bodyParam total_amount string required
     * @bodyParam ref string required
     * @bodyParam ref string required
     * @bodyParam payment_mode string required default "wallet"
     *
    */
	public function finalize($id, Request $request){

		$validator = Validator::make($request->all(), [
			'pickup_info' => 'json|required',
			'delivery_info' => 'json|required',
			'schedule' => 'json|required',
			'package_info' => 'string|required',
			'customer_id' => 'numeric|required',
		]);


		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{
			$date = date("Y-m-d H:i:s");

			$customer = Customers::find($request->customer_id);
			$order = DispatchOrders::find($id);

			if($customer){
				if($order){

					// convert db incoming
					$array_pickup_info = Site::convert_db_json_to_array($order->pickup_info);
					$array_delivery_info = Site::convert_db_json_to_array($order->delivery_info);
					$array_schedule = Site::convert_db_json_to_array($order->schedule);

					// insert new details to its array
					foreach (Site::convert_db_json_to_array($request->pickup_info) as $key => $value) {
						$array_pickup_info[$key] = $value;
					}

					foreach (Site::convert_db_json_to_array($request->delivery_info) as $key => $value) {
						$array_delivery_info[$key] = $value;
					}

					foreach (Site::convert_db_json_to_array($request->schedule) as $key => $value) {
						$array_schedule[$key] = $value;
					}

					// dd(Site::convert_db_json_to_array($request->pickup_info));
					// dd($array_pickup_info);

					$order->update([
						"pickup_info"=>Site::convert_db_array_to_json($array_pickup_info),
						"delivery_info"=>Site::convert_db_array_to_json($array_delivery_info),
						"schedule"=>Site::convert_db_array_to_json($array_schedule),
						"package_info"=>$request->package_info,
						"user_id"=>$request->customer_id,
						"status"=>"awaiting rider",
					]);

					return ["success"=>true, "response"=>new DispatchOrdersResources($order)];


				}
				else{
					return ["success"=>false, "response"=>"order not found"];
				}
			}
			else{
				return ["success"=>false, "response"=>"user not found"];
			}
			
		}
		
	}

	/**
     * Delete Dispatch Record
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam id number required
     *
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
