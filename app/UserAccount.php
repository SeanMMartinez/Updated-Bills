<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAccount extends Authenticatable
{
    use Notifiable;

    //disables the timestamp
    public $timestamps = false;

    //table names
    protected $table = 'useraccounts';

    //primary key id
    protected $primaryKey = "UserAccount_Id";

    //fields of the table
    protected $fillable = ['UserAccount_Id','UserAccount_Email', 'password', 'UserAccount_PasswordRecover',
        'UserAccount_Status', 'Role_Id', 'User_Id', 'UserAccount_DateCreated'];

    //Set relationship
    public function user(){
        return $this->hasOne("App\User", "User_Id");
    }
}
