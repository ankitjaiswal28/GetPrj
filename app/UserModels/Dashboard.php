<?php

namespace App\UserModels;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Dashboard extends Model
{
    function fetchAllNotification() {
        $getuserrole = session()->get('userid');
        $countofgetDetails = DB::table('mst_tbl_notification')->where(['flag'=>'Not Seen','sent_to'=>$getuserrole])->get()->count();
        $aaryofDetails = [];
        if ($countofgetDetails != 0) {
           // DB::enableQuerylog(); // For Seeing The Query
            $getDetails = DB::table('mst_tbl_notification')->where(['flag'=>'Not Seen','sent_to'=>$getuserrole])->get()->toArray();
            //$aa= DB::getQuerylog();
           // print_r($aa);
            // exit;
            // foreach ($getDetails as $key => $value){
            //    echo $aaryofDetails[$key] = $value;
            //    }
                $aaryofDetails = json_decode(json_encode($getDetails),true);
                // print_r($detailsarry);
                // exit;
            }
            
			/* return $aaryofDetails;*/
        // $getDatat = "hiiiii";
        return $aaryofDetails;
    }
}
