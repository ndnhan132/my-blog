<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use Searchable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function saveUser($request){
        $this->name= $request->input('username');
        $this->username= $request->input('username');
        $this->password= bcrypt($request->input('password'));
        $this->save();
        $this->roles()->attach(Role::where('name', '=' , 'user')->first()->id);
    }
    public function userUpdate($id, $request){
        $user= User::find($id);
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->birthday= $request->input('birthday');
        if($request->input('gender')==='male'){
            $user->gender= '0';
        }elseif($request->input('gender')==='female'){
            $user->gender= '1';
        }else{
            $user->gender= '3';
        }
        $user->phone= $request->input('phone');
        $user->address= $request->input('address');
        $user->description= $request->input('description');
        $user->save();
    }
    public function adminDeleteUser($id){
        $user= User::find($id)->first();
        $articles = Article::where('user_id', '=', $id)->get();
        foreach($articles as $art){
            $art->delete();
        }
        $comments = Comment::where('user_id', '=', $id)->get();
        foreach($comments as $com){
            $com->delete();
        }
        $user->delete();
    }
    public function adminUpdateUser($id, $request){
        $user= User::with('roles')->find($id);
        $old_role= $user->roles->first()->name;
        $new_role= $request->input('role');
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->birthday= $request->input('birthday');
        if($request->input('gender')==='male'){
            $user->gender= '0';
        }elseif($request->input('gender')==='female'){
            $user->gender= '1';
        }else{
            $user->gender= '3';
        }
        $user->phone= $request->input('phone');
        $user->address= $request->input('address');
        $user->description= $request->input('description');
        $user->save();
        $old_role= Role::with('users')->where('name', '=', $old_role)->first();
        // $old_role->users()->detach($user->roles->first()->id);
        $user->roles()->detach($old_role->id);
        $user->roles()->attach(Role::where('name', '=' , $new_role)->first()->id);
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
        return $this->belongsToMany('App\Role');
    }

    public function searchableAs()
    {
        return 'users_index';
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();
        return $array;
    }
}
