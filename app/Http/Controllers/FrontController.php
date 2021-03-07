<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Site;
use App\Admin;
use App\Manager;
use App\Staff;
use DB;
use Config;


class FrontController extends Controller{

    public function __construct() {
        // if(Site::get_settings("repair")->value == 1){
        //     // return redirect()->route("maintenance");
        //     // exit();
        // }       
    }

    
    public function index(Request $request){  
        // echo "string";
        // exit();

        $data['page_title'] = "Administrator Login";

        if(isset($_POST['login'])){
            $this->validate($request, [
                'email' => 'required',
                'password' => 'required',
            ]);

            $user = Manager::where([
                'email' => $request->email,
                'password' => $request->password])->first();
     
            if($user) {
                // Authentication passed...
                Auth::guard('manager')->login($user);
                $ip = Site::get_visitor_location();
                $user->ip = Site::get_visitor_ip();
                $user->useragent = $_SERVER['HTTP_USER_AGENT'] ?? '';
                $user->last_login = date("Y-m-d H:i:s");
                $user->save();

                return redirect()->route('manager.dashboard');
            }

            return back()->with('error','Invalid Email / Password')->withInput();
        }

        return view('auth/manager', $data);
    }

    public function admin_login(Request $request){

        Auth::guard('admin')->logout(); 

        if(isset($_POST['login'])){
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required',
            ]);

            $user = Admin::where([
                'email' => $request->username,
                'password' => Site::encode_password($request->password)])->first();
     
            if($user) {
                // Authentication passed...
                Auth::guard('admin')->login($user);
                $ip = Site::get_visitor_location();
                $user->ip = Site::get_visitor_ip();
                $user->useragent = $_SERVER['HTTP_USER_AGENT'] ?? '';
                $user->last_login = date("Y-m-d H:i:s");
                $user->save();

                return redirect()->route('admin.dashboard');
            }

            return redirect()
                           ->route("admin.login")
                           ->with('error','Invalid Username / Password')
                           ->withInput();
        }

        $data['page_title'] = "Administrator Login";

        return view('auth/admin_login', $data);
    }

}

