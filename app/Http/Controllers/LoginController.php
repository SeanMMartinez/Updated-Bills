<?php

namespace App\Http\Controllers;


use App\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt(['UserAccount_Email' => $request->UserAccount_Email, 'password' => $request->password])){
            Auth::user()->UserAccount_Email;
            UserAccount::where('UserAccount_Email', $request->UserAccount_Email)->first();
            Session::save();
            return redirect()->route('home');
        }
        else{
            return response()->json(['error' => 'Unauthorized'], 400);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('/');
    }
}
