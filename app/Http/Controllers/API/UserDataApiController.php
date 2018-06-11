<?php
/**
 * Created by PhpStorm.
 * User: Mendel
 * Date: 6/9/2018
 * Time: 3:07 PM
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\User;
use App\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDataApiController extends Controller
{
    public function userDetails(){
        if($userAccount = UserAccount::where('UserAccount_Id', Auth::guard('api')->id())->get()){

            $user = User::with('userAccount')->where('User_Id', auth()->user()->User_Id)->first();

            return response()->json($user);
        }
        else {
            return response()->json(['response' => 'access denied'], 400);
        }
    }

    public function update(Request $request){
        $user = $request->isMethod('put') ? User::findOrFail($request->User_Id) : new User();

        $user->User_CellphoneNo = $request->input('User_CellphoneNo');
        $user->User_LandlineNo = $request->input('User_LandlineNo');
        $user->save();

        return response()->json($user);
    }
}