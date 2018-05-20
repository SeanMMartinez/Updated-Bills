<?php

namespace App\Http\Controllers;


use App\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){

        //validates email and password
        if(Auth::attempt(['UserAccount_Email' => $request->UserAccount_Email, 'password' => $request->password, 'UserAccount_Status' => 1])){
            Auth::user();
            UserAccount::where('UserAccount_Email', $request->UserAccount_Email)->first();

            //saves the session
            Session::save();

            //redirect to page
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('home');
    }
}
