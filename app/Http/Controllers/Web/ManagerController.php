<?php
 
namespace App\Http\Controllers\Web;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
use App\Site;
use App\Admin;
use App\Manager;

 
class ManagerController extends Controller{

    public function __construct() {
        
    }

    public function index(Request $request){
        // echo "manager";
        // exit();

        $data['page_title'] = "Dashboard";
        $data['manager'] = Auth::guard("manager")->user();
        return view('manager/dashboard', $data);
    }

  
}
