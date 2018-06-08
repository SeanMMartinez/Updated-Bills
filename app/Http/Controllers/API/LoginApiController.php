<?php
/**
 * Created by PhpStorm.
 * User: Mendel
 * Date: 5/20/2018
 * Time: 2:59 AM
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginApiController extends Controller
{
    public function login(Request $request){

        if(Auth::attempt(['UserAccount_Email' => $request->UserAccount_Email, 'password' => $request->password, 'UserAccount_Status' => 1])){
            $userAccount = Auth::user();

            //Get the user details
            $user = User::with('userAccount')->where('User_Id', auth()->user()->User_Id)->first();

            //Return json
            return response()->json(['response' => 'Authorized', 'useraccount_id' => $userAccount->UserAccount_Id, 'data' => $user, 'email' => $userAccount->UserAccount_Email,
                'api_token' => $userAccount->api_token], 200);
        }
        else{
            return response()->json(['response' => 'Unauthorized'], 200);
        }
    }


}