<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    protected $primaryKey = "Role_Id";

    protected $fillable = [
        'Role_Id', 'name', 'Role_Description', 'Role_DateCreated'
    ];

    public $timestamps = false;
}
