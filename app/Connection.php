<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    public $timestamps = false;

    protected $table = 'connection';

    protected $fillable = [
        'User_Id', 'Friend_Id'
    ];
}
