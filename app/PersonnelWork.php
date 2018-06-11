<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonnelWork extends Model
{
    //disables the timestamp
    public $timestamps = false;

    //name of the table
    protected $table = 'personnelwork';

    //primary key
    protected $primaryKey = 'Pwork_Id';

    //fields of the table
    protected $fillable = [
        'Pwork_Id', 'Pwork_Name'
    ];

    public function personnel(){
        return $this->hasMany('App\Personel', 'Pwork_Id');
    }
}
