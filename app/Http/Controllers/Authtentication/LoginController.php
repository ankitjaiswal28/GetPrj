<?php

namespace App\Http\Controllers\Authtentication;

use Illuminate\Http\Request;
use App\Authtentication\Login;
use App\Http\Controllers\Controller;
use Session;
use Crypt;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * It Is Use For The Checking The Login Of User.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ChekLogin(Request $request)
    {

       $login = new Login();
       $username = $request['email'];
       $passwords = $request['passwords'];
       $data['username'] = $username;
       $data['passwords'] = $passwords;

       /** Function Of Encrypt And Decrypt */
       // echo $encryptedpassword = Crypt::encrypt($passwords);exit;
       // $decrypted_Password = Crypt::decrypt($encryptedpassword);exit;
       /** End Of Function  */

       $details = $login->Auuthenticate($data);
    //    print_r($details);exit;
      $count = count($details);
      $message = '';
      if ($count === 0) {
          $message = 'NotFound';
          return $message;
      } else {
        $getpassword = $details['passwords'];
        $user_id = $details['userId'];
        $decryptPassword = Crypt::decrypt($getpassword);
        /** This is Called Ternary operation */
        $retVal = ($decryptPassword === $passwords) ? $message = 'Done' : $message = 'PassNotFound';
        if($retVal === 'Done') {
            $request->session()->put('username', $username);
            $request->session()->put('roleId', '2');
            $request->session()->put('userid', $user_id);

        }
        return $retVal;
      }

     //  print_r($count);
       //$ne = $login;









        // return $request->all();
        // echo $username = $request['email'];
        // $request->session()->put('username', $username);
        // $login->$username = $request['email'];
      // $login->$passwords = $request['passwords'];

       //  print_r($request->all());
        //  $getuserrole = session()->get('role_id');
        // session()->forget('role_id');
        // $userrole1 = session()->get('role_id');
        // print_r($userrole1);
        //return redirect()->route('/add-attendence');
        // return redirect('add-attendence');
    }
    /** This Function Is For The Logout Purpose */
    public function logout()
    {
        Session::flush(); // removes all session data
        return redirect('/');
    }
}
