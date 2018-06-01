<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'TenantRoom_Id';

    protected $table = 'room';

    protected $fillable = [
        'TenantRoom_Id', 'Room', 'Floor', 'RoomType', 'RoomLimit', 'RoomStatus'
    ];
}
