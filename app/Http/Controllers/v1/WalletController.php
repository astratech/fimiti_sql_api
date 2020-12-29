<?php

/**
 * Wallet Controller for Fimiti
 * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
 * @version 1.0
**/

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Customers;
Use App\Wallet;
Use App\Site;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Resources\CustomersResource;


/**
 * @group Wallet
 *
 * APIs for managing customer wallet
*/
class WalletController extends Controller{

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
    public function fund(Request $request){
		$validator = Validator::make($request->all(), [
			'user_id' => 'required|string',
			'amount' => 'required|string',
			'payment_mode' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{
			$customer = Customers::find($user_id);
			if($customer){
				$request->merge([
					"amount"=>Site::fil_num($request->amount),
					"user_id"=>Site::fil_num($request->user_id),
				]);

				$bal_before = $customer->wallet_balance;
				$bal_after = $customer->wallet_balance + $request->amount;

				$data = [
					"user_id" => $request->user_id,
					"amount" => $request->amount,
					"payment_mode" => $request->payment_mode,
					"bal_before" => $bal_before,
					"bal_after" => $bal_after,
					"api_token" => Site::get_api_token_user($request->api_token)->name
				];

				$customer->wallet_balance = $bal_after;
				$customer->save();

				Wallet::create($data);
				return ["success"=>true, "response"=> $customer->wallet_balance];
			}
			else{
				return ["success"=>false, "response"=>"user not found")];
			}

			

			
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

	public function decode_password($password ,Request $request){
		
		return ["success"=>true, "response"=> Site::decode_password($password)];

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
