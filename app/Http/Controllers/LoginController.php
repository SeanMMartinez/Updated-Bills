<?php

namespace App\Http\Controllers;


use App\UserAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request){

        //validates email and password
        if(Auth::attempt(['UserAccount_Email' => ($request->UserAccount_Email), 'password' => ($request->password)])) {
            Auth::user();

            //saves the session
            Session::save();

            //redirect to page
            return redirect()->route('announcements.index');
        }
        else{
            //redirect back to login page
            return redirect()->route('login');
        }
    }

    public function logout(Request $request){
        //logout the user
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();

        //redirect back to login page
        return redirect()->route('login');
    }
}
