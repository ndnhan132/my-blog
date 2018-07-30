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
    public function saveUser($request){
        $this->name= $request->input('register-username');
        $this->username= $request->input('register-username');
        $this->password= bcrypt($request->input('register-password'));
        $this->save();
    }
    public function userUpdate($id, $request){
        $user= User::find($id);
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->birthday= $request->input('birthday');
        $user->gender= $request->input('gender');
        $user->phone= $request->input('phone');
        $user->address= $request->input('address');
        $user->description= $request->input('description');
        $user->save();
    }

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
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
