<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //middleware guard name
    protected $guard = 'user';

    //disables the timestamp
    public $timestamps = false;

    //name of the table
    protected $table = 'user';

    //primary key
    protected $primaryKey = 'User_Id';

    //fields of the table
    protected $fillable = [
        'User_Id', 'Address_Id','User_FirstName', 'User_MiddleName', 'User_LastName', 'User_Picture', 'User_Nationality',
        'User_Birthdate', 'User_Age', 'User_Religion', 'User_Gender', 'User_CivilStatus',
        'User_CellphoneNo', 'User_LandlineNo'
    ];

    //Set relationship
    public function getUser(){
        return $this->belongsTo("App\UserAccount", "User_Id");
    }
}
