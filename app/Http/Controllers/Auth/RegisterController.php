<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserAccount;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'UserAccount_Email' => 'required|string|email|max:255|unique:useraccounts',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\UserAccount
     */
    protected function create(array $data)
    {
        $user = User::create([
            'User_FirstName' => $data['User_FirstName'],
            'User_MiddleName' => $data['User_MiddleName'],
            'User_LastName' => $data['User_LastName'],
            'User_Picture' => $data['User_Picture'],
            'User_Nationality' => $data['User_Nationality'],
            'User_Birthdate' => $data['User_Birthdate'],
            'User_Age' => $data['User_Age'],
            'User_Religion' => $data['User_Religion'],
            'User_Gender' => $data['User_Gender'],
            'User_CivilStatus' => $data['User_CivilStatus'],
            'User_CellphoneNo' => $data['User_CellphoneNo'],
            'User_LandlineNo' => $data['User_LandlineNo'],
        ]);

        UserAccount::create([
            'UserAccount_Email' => $data['UserAccount_Email'],
            'password' => Hash::make($data['password']),
            'UserAccount_Status' => $data['UserAccount_Status'],
            'User_Id' => $user->id
        ]);

        //fix login after registration
    }
}
