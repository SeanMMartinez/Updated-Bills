<?php

namespace App\Http\Controllers;


use App\Role;
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request){

        //validates email and password
        if(Auth::attempt(['UserAccount_Email' => $request->UserAccount_Email, 'password' => $request->password, 'UserAccount_Status' => 1])) {
            $userAccount = Auth::user();
            //refresh token
            do {
                $userAccount->api_token = str_random(60);
            } while (UserAccount::where('api_token', $userAccount->api_token)->exists());

            $userAccount->save();

            //saves the session
            Session::save();

            if($userAccount->Password_Changed == 0){
                //redirect to change password
                return redirect()->action('UpdatePasswordController@showChangePassword');
            }
            else if ($userAccount->Password_Changed == 1){
                //redirect to page
                return redirect()->route('announcements.index');
            }
        }
        else {
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
