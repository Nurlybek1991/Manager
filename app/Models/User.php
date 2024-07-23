<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends \Illuminate\Foundation\Auth\User
{

    use HasFactory;


    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password'
    ];

}
