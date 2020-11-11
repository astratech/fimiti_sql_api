<?php

/**
 * User Controller for Fimiti
 * @author Sangosanya Segun - Flamezbaba <flamezbaba@gmail.com>
 * @version 1.0
**/

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Users;
Use App\Site;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller{

	public function index(){
        return Users::all();
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
    	// dd($request->all());	
    }

    /**
     * update user records - PUT
     *
     * @param  string             $email
     * @param  string             $username
     * @param  string             $fullname
     * @param  string             $mobile
     * @param  string             $password
     * @param  string             $account_type
     * @return json - user data
    */
    public function update(Request $request, $id){
    	
    
    }

    public function delete(Request $request, $id){
      
    }
}
