<?php
/**
 * Created by PhpStorm.
 * User: Mendel
 * Date: 6/5/2018
 * Time: 1:51 AM
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Bill;
use App\User;
use App\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillApiController extends Controller
{
    public function bills(){
        if($userAccount = UserAccount::where('UserAccount_Id', Auth::guard('api')->id())->get()){
            $user = User::with('userAccount')->where('User_Id', auth()->user()->User_Id)->first();

            $bill = Bill::where('User_Id', $user->User_Id)->first();

            return response()->json($bill);
        }
        else {
            return response()->json(['response' => 'access denied'], 400);
        }
    }
}