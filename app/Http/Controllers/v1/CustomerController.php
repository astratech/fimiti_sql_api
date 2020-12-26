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
 * APIs for managing users
*/
class CustomerController extends Controller{

	public function index(){
		
	}

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
				"token" => Str::random(60)
			];

			$r = Customers::create($data);
			return ["success"=>true, "response"=> new CustomersResource($r)];
		}

		
	}

	public function login(Request $request){
		$validator = Validator::make($request->all(), [
			'email' => 'required|email',
			'password' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$admin = Admin::where([
                'email' => strtolower($request->email), 
                'password' => $request->password])->first();

			if($admin){
				$token = Str::random(60);

				$data = [
					"token" => $token
				];

				$admin->update($data);

				return ["success"=>true, "response"=>$token];
			}
			else{
				return ["success"=>false, "response"=>"wrong login details"];
			}

		}

		
	}

	public function check(Request $request){
		$validator = Validator::make($request->all(), [
			'jwt' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$admin = Admin::where("token", $request->jwt)->first();

			if($admin){
				return ["success"=>true, "response"=>$admin];
			}
			else{
				return ["success"=>false, "response"=>"wrong login details"];
			}

		}
		
	}

	public function staff(Request $request){
		$validator = Validator::make($request->all(), [
			'code' => 'required|numeric',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$admin = Staff::where("pin_code", $request->code)->first();

			if($admin){
				$token = Str::random(60);

				$data = [
					"token" => $token
				];

				$admin->update($data);
				return ["success"=>true, "response"=>$token];
			}
			else{
				return ["success"=>false, "response"=>"wrong login details"];
			}

		}
		
	}

	public function check_staff(Request $request){
		$validator = Validator::make($request->all(), [
			'jwt' => 'required|string',
		]);

		if($validator->fails()) {
			return ["success"=>false, "response"=>$validator->messages()->first()];
		}
		else{

			$admin = Staff::where("token", $request->jwt)->first();

			if($admin){
				return ["success"=>true, "response"=>$admin];
			}
			else{
				return ["success"=>false, "response"=>"wrong login details"];
			}

		}
		
	}

	
}
