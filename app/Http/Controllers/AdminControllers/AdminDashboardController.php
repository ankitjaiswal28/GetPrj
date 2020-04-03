<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use App\UserModels\Dashboard;
use App\Http\Controllers\Controller;
use Session;

class AdminDashboardController extends Controller
{
    /**
     * Display The The View Of Dash Board
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         return view('Admin.admindashboard');
     }
     
     /** This Function Will Gett All Notification */
     public function getNotification() {
         $getallNotification = new Dashboard();
         $allDetails=$getallNotification->fetchAllNotification();
         $count = count($allDetails);
         $data = '';
         if ($count === 0) {
            $data = [];
            return $data;
        }else {
            $data = $allDetails;
        }
        return $data;
         // print_r($allDetails);
     }
}
