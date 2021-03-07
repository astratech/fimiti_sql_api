<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Schema;
use DB;

// session_start();
class Site extends Model{
  

    public static function fil_email($str){
        $val = preg_replace("/[^A-Za-z0-9_.-@]/", "", $str);
        $val = strtolower($val);
        return $val;
    }
 
    public static function fil_num($str){
        $val = preg_replace("/[^0-9+.]/", "", $str);
        return $val;
    }

    public static function fil_text($str){
        $val = preg_replace("/[^A-Za-z0-9,_.\-@() ]/", "", $str);
        $val = strtolower($val);
        return $val;
    }
    
    public static function fil_special($str){
        $val = preg_replace("/[^A-Za-z0-9,_.\-@() ]/", "", $str);
        return $val;
    }

    public static function fil_string($str){
        $val = preg_replace("/[^A-Za-z0-9_.\-]/", "", $str);
        $val = strtolower($val);
        return $val;
    }

    public static function fil_password($str){
        $val = preg_replace("/[^A-Za-z0-9_.\-@!#$%&*() ]/", "", $str);
        return $val;
    }
    
    public static function encode_password($t) {
        $a = "677HHge";
        $b = "lopjdhg";
        //encode pass
        $r = base64_encode($t);
        //add pre salt
        $r = $a.$r;
        return $r;
    }

    public static function decode_password($t) {
        $r = substr($t, 7);
        $r = base64_decode($r);
        return $r;
    }

    public static function gen_uq_id($txt) {
        // $a = uniqid();
        $a = mt_rand(9000,9000000);
        $r = $txt.substr(str_shuffle($a),0, 4);
        return strtoupper($r);
    }

    public static function gen_token() {
        $a = mt_rand(9000,9000000);
        $r = substr(str_shuffle($a),0, 6);
        return strtoupper($r);
    }

    public static function fil_request($in, $except = null) {
        if(is_array($in)){
            $filtered = [];
            foreach ($in as $key => $value) {
                $k = strtolower($key);


                if(!is_array($value)){

                    // get exceptions
                    if($k != $except){
                        $v = strtolower($value);
                       
                    }
                    else{
                        $v = $value;
                    }

                     $filtered[$k] = $v;
                }
                else{
                    // level 2 array
                    $k = strtolower($key);
                    foreach ($value as $ky => $vl) {
                        $k1 = strtolower($ky);
                        $v1 = strtolower($vl);

                        $filtered[$k][$k1] = $v1;
                    }

                }
                
            }

            return $filtered;
        }
        else{
            return null;
        }
    }

    public static function get_api_token_user($token){
        $r = DB::select("SELECT * FROM api_access WHERE api_token='$token'");
        $output = [];
        if(count($r) > 0){
            foreach ($r as $value) {
                $output = $value;
            }
        }
        else{
             foreach(Schema::getColumnListing("api_access") as $d => $value) {
                $output[$value] = null;
            }

            $output = json_encode($output);
            $output = json_decode($output);
        }

        return $output; 
    }

    public static function convert_db_json_to_array($json){
        $r = json_decode(json_encode(json_decode($json)), true);
        return $r; 
    }

    public static function convert_db_array_to_json($arr){
        $r = json_encode(json_decode(json_encode($arr)), true);
        return $r; 
    }

     public static function get_visitor_location(){
        $xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".Site::get_visitor_ip());
        return $xml->geoplugin_city.", ".$xml->geoplugin_countryName;
    }

    public static function get_visitor_ip(){
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
     
        return $ipaddress;
    }

    public static function time_ago($time_ago){
        $time_ago = strtotime($time_ago);
        $cur_time   = time();
        $time_elapsed   = $cur_time - $time_ago;
        $seconds    = $time_elapsed ;
        $minutes    = round($time_elapsed / 60 );
        $hours      = round($time_elapsed / 3600);
        $days       = round($time_elapsed / 86400 );
        $weeks      = round($time_elapsed / 604800);
        $months     = round($time_elapsed / 2600640 );
        $years      = round($time_elapsed / 31207680 );
        // Seconds
        if($seconds <= 60){
            return "just now";
        }
        //Minutes
        else if($minutes <=60){
            if($minutes==1){
                return "one minute ago";
            }
            else{
                return "$minutes minutes ago";
            }
        }
        //Hours
        else if($hours <=24){
            if($hours==1){
                return "an hour ago";
            }else{
                return "$hours hrs ago";
            }
        }
        //Days
        else if($days <= 7){
            if($days==1){
                return "yesterday";
            }else{
                return "$days days ago";
            }
        }
        //Weeks
        else if($weeks <= 4.3){
            if($weeks==1){
                return "a week ago";
            }else{
                return "$weeks weeks ago";
            }
        }
        //Months
        else if($months <=12){
            if($months==1){
                return "a month ago";
            }else{
                return "$months months ago";
            }
        }
        //Years
        else{
            if($years==1){
                return "one year ago";
            }else{
                return "$years years ago";
            }
        }
    }


}
