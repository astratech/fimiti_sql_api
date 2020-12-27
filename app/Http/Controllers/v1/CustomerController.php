<?php

/**
 * Login Controller for Fimiti
 * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
 * @version 1.0
**/

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Customers;
Use App\Site;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Resources\CustomersResource;


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
