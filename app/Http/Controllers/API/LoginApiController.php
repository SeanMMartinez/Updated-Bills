<?php
/**
 * Created by PhpStorm.
 * User: Mendel
 * Date: 5/20/2018
 * Time: 2:59 AM
 */

namespace App\Http\Controllers\API;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginApiController
{
    public function login(Request $request){

        if(Auth::attempt(['UserAccount_Email' => $request->UserAccount_Email, 'password' => $request->password, 'UserAccount_Status' => 1])){
            $userAccount = Auth::user();

            //Get the user details
            $user = User::with('userAccount')->where('User_Id', auth()->user()->User_Id)->first();

            //Return json
            return response()->json(['response' => 'Authorized', 'data' => $user, 'email' => $userAccount->UserAccount_Email], 200);
        }
        else{
            return response()->json(['error' => 'Unauthorized'], 400);
        }
    }
}