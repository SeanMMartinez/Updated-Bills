<?php
/**
 * Created by PhpStorm.
 * User: Mendel
 * Date: 5/20/2018
 * Time: 2:59 AM
 */

namespace App\Http\Controllers\API;

use App\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginApiController
{
    public function login(Request $request){

        //instantiate the UserAccount model
        $userAccount = new UserAccount();

        if(Auth::attempt(['UserAccount_Email' => $request->UserAccount_Email, 'password' => $request->password, 'Role_Id' => 1, 'UserAccount_Status' => 1])){
            $user = Auth::user($userAccount);

            //fix - get other attributes of the user
            return response()->json(['firstName' => $user->User_FirstName, 'response' => 'Authorized'], 200);
        }
        else{
            return response()->json(['error' => 'Unauthorized'], 400);
        }
    }
}