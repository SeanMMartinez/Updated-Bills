<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'TenantRoom_Id';

    protected $table = 'room';

    protected $fillable = [
        'TenantRoom_Id', 'Room', 'Floor', 'RoomType', 'RoomLimit', 'RoomStatus'
    ];

    public function tenantInfo(){
        return $this->hasMany('App\Tenant', 'TenantRoom_Id');
    }
}
