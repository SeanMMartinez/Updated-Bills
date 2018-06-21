<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Violation extends Model
{
    //disables the timestamp
    public $timestamps = false;

    protected $table = 'tenantrecords';

    protected $primaryKey = 'Records_Id';

    protected $fillable = [
        'Records_Id', 'Records_CreatedBy', 'Records_Owner', 'Records_Title',
        'Records_Text', 'Records_DateTime_Added'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'User_Id');
    }
}
