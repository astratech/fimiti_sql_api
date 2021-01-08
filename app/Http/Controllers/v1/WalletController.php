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
     * Fund Wallet
     *
     *
     * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
     * @bodyParam user_id string required the customer username
     * @bodyParam amount string required the customer fullname
     * @bodyParam payment_mode string required
     *
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

}
