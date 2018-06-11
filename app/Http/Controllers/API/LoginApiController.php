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
use App\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginApiController extends Controller
{
    public function login(Request $request){

        if(Auth::attempt(['UserAccount_Email' => $request->UserAccount_Email, 'password' => $request->password, 'UserAccount_Status' => 1])){
            $userAccount = Auth::user();

            //refresh token every new login
            do{
                $userAccount->api_token = str_random(60);
            }while(UserAccount::where('api_token', $userAccount->api_token)->exists());

            $userAccount->save();

            //Return json
            return response()->json(['response' => 'Authorized', 'useraccount_id' => $userAccount->UserAccount_Id, 'email' => $userAccount->UserAccount_Email,
                'api_token' => $userAccount->api_token], 200);
        }
        else{
            return response()->json(['response' => 'Unauthorized'], 200);
        }
    }


}