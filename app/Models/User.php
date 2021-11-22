<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'password',
        'phoneNum',
        'gender',
        'userLevel',
        'bornDate',
        'address',
        'status',
        'lastStudied',
        'emergencyNum',
        'job',
        'agency',
        'profilePhoto',
        'identityPhoto',
        'token',
        'chat_id',
    ];
}
