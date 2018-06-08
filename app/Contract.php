<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';

    protected $primaryKey = 'Contract_Id';

    protected $fillable = [
      'Contract_Id', 'Contract_Start', 'Contract_Expiry', 'Contract_Status',
      'Contract_File'
    ];

    public function tenantInfo(){
        return $this->belongsTo('App\TenantInfo', 'Contract_Id');
    }
}
