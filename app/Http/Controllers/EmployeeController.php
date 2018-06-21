<?php

namespace App\Http\Controllers;

use App\Address;
use App\UserAccount;
use App\User;
use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($userAccounts = UserAccount::where('UserAccount_Id', '!=', 83)->whereRoleIs('Employee')->get()){
            return view('employees.index')->with('userAccounts', $userAccounts);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('employees.create')->with('roles', $roles);
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

        //image upload
        if($request->hasFile('User_Picture')){
            //get filename with extension
            $fileNameWithExt = $request->file('User_Picture')->getClientOriginalName();
            //get just filename
            $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('User_Picture')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('User_Picture')->storeAs('public/images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        $user->User_Picture = $fileNameToStore;

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
        $password = str_random(8);
        $userAccount->UserAccount_Password = Hash::make($password);
        $userAccount->UserAccount_Status = 1;
        $userAccount->User_Id = $user->User_Id;
        $userAccount->api_token = str_random(60);
        $userAccount->UserAccount_DateCreated = Carbon::now('Asia/Manila')->toDateTimeString();
        $userAccount->Password_Changed = 0;
        $userAccount->save();

        //get the registered user id
        $thisUser = UserAccount::findOrFail($userAccount->UserAccount_Id);
        $this->sendEmail($thisUser, $password);

        //set the initial role to employee
        $userAccount->attachRole('Employee');

        return view("employees.show")->with('userAccount', $userAccount);
    }

    //send initial password to email
    public function sendEmail($thisUser, $password){
        $data = array('email' => $thisUser->UserAccount_Email, 'password' => $password);

        Mail::send('email.sendPass', ['data' => $data], function ($message) use ($data) {
            $message->from('dormpanion@gmail.com', 'DormPanion');
            $message->to($data['email'])->subject('DormPanion Initial Password');
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userAccount = UserAccount::where('UserAccount_Id', $id)->with('roles')->first();
        return view("employees.show")->with('userAccount', $userAccount);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userAccount = UserAccount::where('UserAccount_Id', $id)->with('roles')->first();

        //get user Id
        $userId = $userAccount->User_Id;
        $user = User::where('User_Id', $userId)->first();

        //get address Id
        $addressId = $user->Address_Id;
        $address = Address::where('Address_Id', $addressId)->first();

        $roles = Role::all();

        return view("employees.edit")->withUserAccount($userAccount)->withAddress($address)->with('roles', $roles);
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
        $userAccount = UserAccount::findOrFail($id);
        $userAccount->UserAccount_Email = $request->input('UserAccount_Email');
        $userAccount->UserAccount_Status = $request->input('UserAccount_Status');
        $userAccount->api_token = str_random(60);
        $userAccount->save();

        $user = User::findOrFail($userAccount->User_Id);
        $user->User_FirstName = $request->input('User_FirstName');
        $user->User_MiddleName = $request->input('User_MiddleName');
        $user->User_LastName = $request->input('User_LastName');

        //image upload
        if($request->hasFile('User_Picture')){
            //get filename with extension
            $fileNameWithExt = $request->file('User_Picture')->getClientOriginalName();
            //get just filename
            $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('User_Picture')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('User_Picture')->storeAs('public/images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        if($request->hasfile('User_Picture')){
            $user->User_Picture = $fileNameToStore;
        }

        $user->User_Nationality = $request->input('User_Nationality');
        $user->User_Birthdate = $request->input('User_Birthdate');
        $user->User_Age = $request->input('User_Age');
        $user->User_Religion = $request->input('User_Religion');
        $user->User_Gender = $request->input('User_Gender');
        $user->User_CivilStatus = $request->input('User_CivilStatus');
        $user->User_CellphoneNo = $request->input('User_CellphoneNo');
        $user->User_LandlineNo = $request->input('User_LandlineNo');
        $user->save();

        $address = Address::findOrFail($user->Address_Id);
        $address->Address_HomeAdd = $request->input('Address_HomeAdd');
        $address->Address_City = $request->input('Address_City');
        $address->Address_Province = $request->input('Address_Province');
        $address->Address_ZipCode = $request->input('Address_ZipCode');
        $address->save();

        $userAccount->syncRoles($request->roles);


        return redirect()->route('employees.show', $id);

    }
}
