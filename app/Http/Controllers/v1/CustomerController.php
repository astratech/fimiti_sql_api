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


/**
 * @group Customers
 *
 * APIs for managing customers
*/
class CustomerController extends Controller{

	/**
     * Create Customer Record
     *
     * This endpoint allows you to create customer
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam username string required the customer username
     * @bodyParam fullname string required the customer fullname
     * @bodyParam mobile number required
     * @bodyParam email string required
     * @bodyParam password string required
     *
     * @responseFile storage/responses/customers.register.post.json
    */
    public function register(Request $request){
		$validator = Validator::make($request->all(), [
			'username' => 'required|string',
			'fullname' => 'required|string',
			'mobile' => 'required|string',
			'email' => 'required|email',
			'password' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$request->merge([
				"fullname"=>Site::fil_text($request->fullname),
				"username"=>Site::fil_string($request->username),
				"mobile"=>Site::fil_num($request->mobile),
				"email"=>Site::fil_email($request->email),
				"password"=>Site::encode_password($request->password),
			]);

			if(Customers::where("mobile", $request->mobile)->first()){
				return ["success"=>false, "response"=>"Phone Number $request->mobile already exist"];
			}

			if(Customers::where("email", $request->email)->first()){
				return ["success"=>false, "response"=>"Email $request->email already exist"];
			}

			if(Customers::where("username", $request->username)->first()){
				return ["success"=>false, "response"=>"Username $request->username already exist"];
			}

			$token = Str::random(60);

			$data = [
				"fullname" => $request->fullname,
				"username" => $request->username,
				"mobile" => $request->mobile,
				"email" => $request->email,
				"password" => $request->password,
				"token" => Str::random(60),
				"api_token" => Site::get_api_token_user($request->api_token)->name
			];

			$r = Customers::create($data);
			return ["success"=>true, "response"=> new CustomersResource($r)];
		}

		
	}

	/**
     * Customer Login
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam mobile number required
     * @bodyParam password string required
     *
     * @responseFile storage/responses/customers.register.post.json
    */
    public function login(Request $request){
		$validator = Validator::make($request->all(), [
			'mobile' => 'required|string',
			'password' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$request->merge([
				"mobile"=>Site::fil_num($request->mobile),
				"password"=>Site::encode_password($request->password),
			]);

			$customer = Customers::where(["mobile" => $request->mobile, "password" => $request->password])->first();

			if($customer){
				$t = Str::random(60);

				$data = [
					"token" => $t,
					"api_token" => Site::get_api_token_user($request->api_token)->name
				];

				$r = $customer->update($data);
				return ["success"=>true, "response"=> new CustomersResource($customer)];				
			}
			else{
				return ["success"=>false, "response"=>"invalid login"];
			}
		}	
	}


	/**
     * Customer Validate Login Via Token(JWT)
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam token number required
     *
     * @responseFile storage/responses/customers.register.post.json
    */
	public function validate_login(Request $request){
		$validator = Validator::make($request->all(), [
			'token' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$c = Customers::where("token", $request->token)->first();

			if($c){
				return ["success"=>true, "response"=> new CustomersResource($c)];
			}
			else{
				return ["success"=>false, "response"=>"user not logged in"];
			}

		}
		
	}

	/**
     * Change Customer Password
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam old_password string required
     * @bodyParam new_password string required
     *
    */
	public function change_password($id ,Request $request){
		$validator = Validator::make($request->all(), [
			'old_password' => 'required|string',
			'new_password' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$c = Customers::find($id);

			if($c){
				if($request->old_password != Site::decode_password($c->password)){
					return ["success"=>false, "response"=>"wrong old password"];
				}

				$data = [
					"password" => Site::encode_password($request->new_password),
					"api_token" => Site::get_api_token_user($request->api_token)->name
				];

				$c->update($data);
				return ["success"=>true, "response"=> "password updated"];

			}
			else{
				return ["success"=>false, "response"=>"record not found"];
			}

		}
		
	}

	/**
     * Change Customer Email
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam email string required
     *
    */
	public function change_email($id ,Request $request){
		$validator = Validator::make($request->all(), [
			'email' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$c = Customers::find($id);

			if($c){


				if(Customers::where("email", $request->email)->first()){
					return ["success"=>false, "response"=> "email $request->email already exist"];
				}
				

				$data = [
					"email" => $request->email,
					"api_token" => Site::get_api_token_user($request->api_token)->name
				];

				$c->update($data);
				return ["success"=>true, "response"=> new CustomersResource($c)];
			}
			else{
				return ["success"=>false, "response"=>"record not found"];
			}

		}
		
	}

	/**
     * Change Customer Phone Number
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam mobile string required
     *
    */
	public function change_mobile($id ,Request $request){
		$validator = Validator::make($request->all(), [
			'mobile' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$c = Customers::find($id);

			if($c){


				if(Customers::where("mobile", $request->mobile)->first()){
					return ["success"=>false, "response"=> "phone number $request->mobile already exist"];
				}
				
				$data = [
					"mobile" => $request->mobile,
					"api_token" => Site::get_api_token_user($request->api_token)->name
				];

				$c->update($data);
				return ["success"=>true, "response"=> new CustomersResource($c)];
			}
			else{
				return ["success"=>false, "response"=>"record not found"];
			}

		}
		
	}

	/**
     * Get Single Customer Record
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam id number required customer_id
     *
    */
	public function single_customer($id ,Request $request){
		
		$c = Customers::find($id);

		if($c){
			return ["success"=>true, "response"=> new CustomersResource($c)];
		}
		else{
			return ["success"=>false, "response"=>"record not found"];
		}
		
	}

	public function decode_password($password ,Request $request){
		
		return ["success"=>true, "response"=> Site::decode_password($password)];

	}

	/**
     * Credit Customer Wallet
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam amount number required total amount to be credited
     * @bodyParam payment_mode string required either ('cash','transfer','atm', 'wallet')
     * @bodyParam trans_num string required
     *
    */
	public function wallet_credit($id, Request $request){
		$validator = Validator::make($request->all(), [
			'amount' => 'required|string',
			'payment_mode' => 'required|string',
			'trans_num' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{
			$customer = Customers::find($id);
			if($customer){
				$request->merge([
					"amount"=>Site::fil_num($request->amount),
					"payment_mode"=>Site::fil_string($request->payment_mode),
					"trans_num"=>Site::fil_string($request->trans_num),
				]);

				$bal_before = $customer->wallet_balance;
				$bal_after = $customer->wallet_balance + $request->amount;

				$data = [
					"user_id" => $id,
					"amount" => $request->amount,
					"payment_mode" => $request->payment_mode,
					"trans_num" => $request->trans_num,
					"bal_before" => $bal_before,
					"bal_after" => $bal_after,
					"type" => "credit",
					"api_token" => Site::get_api_token_user($request->api_token)->name
				];

				Wallet::create($data);

				$customer->wallet_balance = $bal_after;
				$customer->save();
				
				return ["success"=>true, "response"=> new CustomersResource($customer)];
			}
			else{
				return ["success"=>false, "response"=>"user not found"];
			}

			

			
		}

		
	}

	/**
     * Record Order
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam courier string required total amount to be credited
     * @bodyParam pickup_info json required refer to order json for full details
     * @bodyParam delivery_info json required refer to order json for full details
     * @bodyParam package_info json refer to order json for full details
     * @bodyParam timeline json refer to order json for full details
     * @bodyParam pricing json required refer to order json for full details
     * @bodyParam rider_info json refer to order json for full details
     * @bodyParam payment_info json required refer to order json for full details
     *
    */
	public function place_order($id, Request $request){

		$validator = Validator::make($request->all(), [
			'courier' => 'string|required',
			'pickup_info' => 'json|required',
			'delivery_info' => 'json|required',
			'package_info' => 'json',
			'timeline' => 'json',
			'pricing' => 'json|required',
			'rider_info' => 'json',
			'payment_info' => 'json|required',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{
			// generate order ref
			$ref = "FMT".rand(100000,999999);
			if(count(DispatchOrders::where("ref",$ref)->get()) > 0){
				$ref = "FMT".rand(100000,999999);
			}

			$data = [
				"user_id" => $id,
				"ref" => $ref,
				"courier" => $request->courier,
				"pickup_info" => is_null($request->pickup_info) ? null : $request->pickup_info,
				"delivery_info" => is_null($request->delivery_info) ? null : $request->delivery_info,
				"package_info" => is_null($request->package_info) ? null : $request->package_info,
				"timeline" => is_null($request->timeline) ? null : $request->timeline,
				"pricing" => is_null($request->pricing) ? null : $request->pricing,
				"rider_info" => is_null($request->rider_info) ? null : $request->rider_info,
				"payment_info" => is_null($request->payment_info) ? null : $request->payment_info,
			];
			$r = DispatchOrders::create($data);
			return ["success"=>true, "response"=>$r];
			
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
	public function pay_via_wallet($id, Request $request){

		$request->merge([
			"order_id"=>Site::fil_num($request->order_id),
			"total_amount"=>Site::fil_num($request->total_amount),
			"ref"=>Site::fil_string($request->ref),
			"payment_mode"=>Site::fil_string($request->payment_mode),
		]);

		$validator = Validator::make($request->all(), [
			'order_id' => 'numeric|required',
			'total_amount' => 'numeric|required',
			'ref' => 'string|required',
			'payment_mode' => 'string|required',
		]);



		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{
			$date = date("Y-m-d H:i:s");

			$customer = Customers::find($id);
			$order = DispatchOrders::find($request->order_id);

			$payment_info = Site::convert_db_json_to_array($order->payment_info);
			if($payment_info['confirmed'] == "true"){
				return ["success"=>false, "response"=>"already paid for this order"];
			}

			if($customer AND $order){
				
				$bal_before = $customer->wallet_balance;
				$bal_after = $customer->wallet_balance - $request->total_amount;

				if($request->total_amount > $bal_before){
					return ["success"=>false, "response"=>"insufficient balance"];
				}

				try {
				    \DB::beginTransaction();

				    // remove amount from balance
					$data = [
						"user_id" => $id,
						"amount" => $request->total_amount,
						"payment_mode" => $request->payment_mode,
						"trans_num" => $request->ref,
						"bal_before" => $bal_before,
						"bal_after" => $bal_after,
						"type" => "debit",
						"api_token" => Site::get_api_token_user($request->api_token)->name
					];

				    Wallet::create($data);

				    // update order records
				    // update payment_info

				    $payment_info = Site::convert_db_json_to_array($order->payment_info);
				    $payment_info['confirmed'] = true;
				    $payment_info['method'] = $request->payment_mode;
				    $payment_info['date_paid'] = $date;
				    $payment_info['date_confirmed'] = $date;

				    $new_payment_info = Site::convert_db_array_to_json($payment_info);
				    $order->update(["payment_info"=>$new_payment_info]);


				    // update user balance
				    $customer->wallet_balance = $bal_after;
					$customer->save();

				    \DB::commit();

				    return ["success"=>false, "response"=>new DispatchOrdersResources($order)];

				} catch (Throwable $e) {
				    \DB::rollback();
				}
				
			}
			else{
				return ["success"=>false, "response"=>"user not found"];
			}
			
		}
		
	}

	/**
     * All Customer List
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     *
     * @responseFile storage/responses/customers.register.post.json
    */
    public function all_customers(Request $request){
		$r = CustomersResource::collection(Customers::all());
		return ["success"=>true, "response"=>$r];
	}
	
}
