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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserDataApiController extends Controller
{
    public function userDetails(){
        if($userAccount = UserAccount::where('UserAccount_Id', Auth::guard('api')->id())->first()){

            $user = User::with('userAccount')->where('User_Id', auth()->user()->User_Id)->first();

            return response()->json(['email' => $userAccount->UserAccount_Email, 'data' => $user]);
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

        $userAccount = UserAccount::where('User_Id', $user->User_Id)->first();
        $validator = Validator::make($request->all(), [
            'UserAccount_Email' => 'unique:useraccounts,UserAccount_Email,'.$userAccount->UserAccount_Id.',UserAccount_Id'
        ]);

        if($validator->fails()){
            return response()->json(['response' => 'failed']);
        }

        $userAccount->UserAccount_Email = $request->input('UserAccount_Email');
        $userAccount->save();

        return response()->json(['response' => 'success', 'email' => $userAccount->UserAccount_Email, 'data' => $user]);
    }

    public function changePassword(Request $request){
        $userAccount = UserAccount::find(Auth::id());
        $hashedPassword = $userAccount->UserAccount_Password;

        if (!(Hash::check($request->input('oldPassword'), $hashedPassword))) {
            // The passwords matches
            return response()->json(['response' => 'not matched']);
        }

        if(strcmp($request->input('oldPassword'), $request->input('newPassword')) == 0){
            //Current password and new password are same
            return response()->json(['response' => 'same password']);
        }

        //Change Password
        $userAccount->UserAccount_Password = Hash::make($request->get('newPassword'));
        $userAccount->save();

        return response()->json(['response' => 'success']);
    }
}