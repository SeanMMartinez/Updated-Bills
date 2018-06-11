<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenantInfo extends Model
{
    //disables the timestamp
    public $timestamps = false;

    protected $table = 'tenantinfo';

    protected $primaryKey = 'TenantInfo_Id';

    protected $fillable = [
      'TenantInfo_Id', 'TenantRoom_Id', 'TenantGuardian_Id', 'Contract_Id', 'User_Id'
    ];

    public function tenantGuardian(){
        return $this->belongsTo('App\TenantGuardian', 'TenantGuardian_Id');
    }

    public function room(){
        return $this->belongsTo('App\Room', 'TenantRoom_Id');
    }

    public function contract(){
        return $this->hasMany('App\Contract', 'Contract_Id');
    }

    public function user(){
        return $this->belongsTo('App\User', 'User_Id');
    }
}
