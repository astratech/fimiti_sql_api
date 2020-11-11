<?php

/**
 * User Controller for Fimiti
 * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
 * @version 1.0
**/

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Customer;
Use App\Site;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller{

  public function index(){
        return Customer::all();
    }

  /**
     * Return the records of a user
     *
     * @param  string             $username
     * @return JSON
    */
    public function show($username){
      
    }

    /**
     * Create user account
     *
     * @param  string             $email
     * @param  string             $username
     * @param  string             $fullname
     * @param  string             $mobile
     * @param  string             $password
     * @param  string             $account_type
     * @return json - user data
    */
    public function create(Request $request){

      $validator = Validator::make($request->all(), [

           'username' => 'required|string|unique:users',
           'fullname' => 'required|string',
           'email' => 'required|email|unique:users',
           'mobile' => 'required|numeric',
           'password' => 'required|string',

        ]);

      if($validator->fails()) {
          return['success'=>false, "response"=>$validator->messages()->first()];
      }
      else{
          $data = [

            "username" => $request->username,
            "fullname" => $request->fullname,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "password" => $request->password,
          ];
          $user = Customer::create($data);
          return ["success"=>true, "response"=>$user];
     
      }

    }

    /**
     * update user records - PUT
     *
     * @param  string             $email
     * @param  string             $username
     * @param  string             $fullname
     * @param  string             $mobile
     * @param  string             $password
     * @return json - user data
    */
    public function update(Request $request, $id){
      
       $validator = Validator::make($request->all(), [

           'username' => 'string',
           'fullname' => 'string',
           'email' => 'email|unique:users',
           'mobile' => 'numeric|unique:users',
           'password' => 'string',

        ]);

      if($validator->fails()) {
          return['success'=>false, "response"=>$validator->messages()->first()];
      }
      else{

          $record = Customer::find($id);

          if($record){
              $data = [
                      "username" => empty($request->username) ? $record->username : strtolower($request->username),
                      "fullname" => empty($request->fullname) ? $record->fullname : strtolower($request->fullname),
                      "email" => empty($request->email) ? $record->email : strtolower($request->email),
                      "mobile" => empty($request->mobile) ? $record->mobile : strtolower($request->mobile),
                      "password" => empty($request->password) ? $record->password : strtolower($request->password),
                    ];
                  
                    // return ["success"=>true, "response"=>$user];

                     $record->update($data);
                    return ["success"=>true, "response"=>$record];
          }
          else{
            return ['success'=>false, "response"=>"record not found!!"];
          }
      }
   
     
    }

    public function delete(Request $request, $id){
      $record = Customer::findOrFail($id);
      $record->delete($id);
      return ["success"=>true, "response"=>"record deleted"];

    //   if ($record) {
    //     $record->delete();
    //     return ["success"=>true, "response"=>"record deleted"];
    //   }
    //   else{
    //     return ["success"=>false, "response"=>"record not found"];
    //   }
     
    }
}