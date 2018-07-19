<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function article(){
        return $this->hasOne('App\Article');
    }
    public function user(){
        return $this->hasOne('App\Comment');
    }


    /**
     * The roles that belong to the user. 123
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
