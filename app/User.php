<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'firstname', 'lastname'
    ];

    public function phone()
    {
        return $this->hasOne('App\Phone');
    }

    public function role()
    {
        return $this->belongsToMany('App\Role', 'role_users');
    }
}
