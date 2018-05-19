<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;
    protected $table = 'user';
    protected $primaryKey = "User_Id";
    protected $fillable = [
        'User_Id', 'Address_Id','User_FirstName', 'User_MiddleName', 'User_LastName', 'User_Picture', 'User_Nationality',
        'User_Birthdate', 'User_Age', 'User_Religion', 'User_Gender', 'User_CivilStatus',
        'User_CellphoneNo', 'User_LandlineNo'
    ];
}
