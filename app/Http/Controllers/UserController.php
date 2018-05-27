<?php

namespace App\Http\Controllers;

use App\Address;
use App\UserAccount;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAccounts = UserAccount::orderBy('UserAccount_Id')->paginate(10);
        return view('users.index')->with('userAccounts', $userAccounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = new Address();
        $address->Address_HomeAdd = $request->input('Address_HomeAdd');
        $address->Address_City = $request->input('Address_City');
        $address->Address_Province = $request->input('Address_Province');
        $address->Address_ZipCode = $request->input('Address_ZipCode');
        $address->save();

        $user = new User();
        $user->Address_Id = $address->Address_Id;
        $user->User_FirstName = $request->input('User_FirstName');
        $user->User_MiddleName = $request->input('User_MiddleName');
        $user->User_LastName = $request->input('User_LastName');
        $user->User_Picture = $request->input('User_Picture');
        $user->User_Nationality = $request->input('User_Nationality');
        $user->User_Birthdate = $request->input('User_Birthdate');
        $user->User_Age = $request->input('User_Age');
        $user->User_Religion = $request->input('User_Religion');
        $user->User_Gender = $request->input('User_Gender');
        $user->User_CivilStatus = $request->input('User_CivilStatus');
        $user->User_CellphoneNo = $request->input('User_CellphoneNo');
        $user->User_LandlineNo = $request->input('User_LandlineNo');
        $user->save();

        $userAccount = new UserAccount();
        $userAccount->UserAccount_Email = $request->input('UserAccount_Email');
        $userAccount->password = Hash::make($request->input('password'));
        $userAccount->UserAccount_Status = $request->input('UserAccount_Status');
        $userAccount->User_Id = $user->User_Id;
        $userAccount->api_token = str_random(60);
        $userAccount->UserAccount_DateCreated = Carbon::now()->toDateTimeString();
        $userAccount->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userAccount = UserAccount::findOrFail($id);
        return view("users.show")->with('userAccount', $userAccount);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userAccount = UserAccount::findOrFail($id);
        return view("users.edit")->withUserAccount($userAccount);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //to be continued
    }
}
