<?php

/**
 * Login Controller for AstraPos
 * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
 * @version 1.0
**/

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Admin;
Use App\Staff;
Use App\Site;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LoginController extends Controller{

	public function index(){
		
	}

	/**
     * Admin Login
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam email string required
     * @bodyParam password string required 
     *
    */
	public function admin_login(Request $request){
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

	
}
