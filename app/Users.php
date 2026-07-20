<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $guarded =[];
    protected $hidden = ['user_id'];

    protected $fillable = [
        'email',
        'password',
    ];

    // protected $hidden = [
    //     'password',
    // ];

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}

