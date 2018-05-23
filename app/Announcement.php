<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    //disables the timestamp
    public $timestamps = false;

    //name of the table
    protected $table = 'announcements';

    //primary key
    protected $primaryKey = 'Announcement_Id';

    //fields of the table
    protected $fillable = [
        'Announcement_Id', 'Announcement_Title', 'User_Id', 'Announcement_Text', 'Announcement_DateTime_Created'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'User_Id');
    }
}
