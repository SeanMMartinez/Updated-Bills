<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //disables the timestamp
    public $timestamps = false;

    //name of the table
    protected $table = 'address';

    //primary key
    protected $primaryKey = 'Address_Id';

    //fields of the table
    protected $fillable = [
        'Address_Id', 'Address_HomeAdd', 'Address_City', 'Address_Province', 'Address_ZipCode'
    ];

    public function user(){
        return $this->hasMany('App\User', 'Address_Id');
    }
}
