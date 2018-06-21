<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class UserAccount extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;

    //disables the timestamp
    public $timestamps = false;

    //table names
    protected $table = 'useraccounts';

    //primary key id
    protected $primaryKey = "UserAccount_Id";

    //fields of the table
    protected $fillable = ['UserAccount_Id','UserAccount_Email', 'UserAccount_Password', 'UserAccount_PasswordRecover',
        'UserAccount_Status', 'User_Id', 'api_token', 'UserAccount_DateCreated'];

    //Set relationship
    public function user(){
        return $this->belongsTo("App\User", "User_Id");
    }

    //https://stackoverflow.com/questions/43467328/laravel-5-authentication-without-remember-token
    //ignores remember token
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
            parent::setAttribute($key, $value);
        }
    }

    //change the default password field name
    public function getAuthPassword() {
        return $this->UserAccount_Password;
    }
}
