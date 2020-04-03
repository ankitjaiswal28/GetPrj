<?php

namespace App\Authtentication;

use Illuminate\Database\Eloquent\Model;
use DB;

class Login extends Model
{
    /** This Function Is To Authenticate The User And Send Data To Controller */
    public function Auuthenticate($data)
		{
            $username = $data['username'];
            $passwords = $data['passwords'];

            /** This Patch Is For Refernce Purpose Do NOt Remove It*/

           //  DB::enableQuerylog();
            // $user = DB::table('mst_user_tbl')->where(['flag'=>'Show'])->get()->toArray(); // It Will Return Only Single Row
            // $aa= DB::getQuerylog();
            // print_r($aa);exit;	 first()->

            /** End Of Patch */

            // DB::enableQuerylog(); // For Seeing The Query
            $user = DB::table('mst_user_tbl')->where(['flag'=>'Show','emailId'=>$username])->get()->count();
            // print_r($user);exit;
            $aaryofDetails = [];
            if ($user != 0) {
                $getDetails = DB::table('mst_user_tbl')->where(['flag'=>'Show','emailId'=>$username])->get()->first();
               foreach ($getDetails as $key => $value){
                   // echo $key;
               $aaryofDetails[$key] = $value;
               }
                // $detailsarry = json_decode(json_encode($getDetails),true);
                // print_r($getDetails);
                // exit;
            }

			 return $aaryofDetails;
		}
}
