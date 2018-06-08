<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenantGuardian extends Model
{
    //disables the timestamp
    public $timestamps = false;

    protected $table = 'tenantguardian';

    protected $primaryKey = 'TenantGuardian_Id';

    protected $fillable = [
      'TenantGuardian_Id', 'User_Id', 'TenantGuardian_FirstName', 'TenantGuardian_LastName',
        'TenantGuardian_Age', 'TenantGuardian_Email', 'TenantGuardian_Cellphone', 'TenantGuardian_Landline',
        'TenantGuardian_Relation'
    ];

    public function tenantInfo(){
        return $this->hasOne('App\TenantInfo', 'TenantGuardian_Id');
    }
}
