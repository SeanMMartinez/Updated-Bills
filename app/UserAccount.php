<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserAccount extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $table = 'useraccounts';
    protected $primaryKey = "UserAccount_Id";
    protected $fillable = ['UserAccount_Email', 'password', 'UserAccount_PasswordRecover',
        'UserAccount_Status', 'Role_Id', 'User_Id', 'UserAccount_DateCreated'];
}
