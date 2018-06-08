<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';

    protected $primaryKey = 'Bill_Id';

    protected $fillable = [
      'Bill_Id', 'User_Id', 'Bill_Month', 'Bill_Water', 'Bill_Electricity', 'Bill_Rent', 'Bill_Total',
        'Bill_DateTime_Created', 'Bill_DueDate', 'Bill_Status'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'User_Id');
    }
}
