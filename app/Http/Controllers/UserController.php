<?php
namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;
use Laravel\Scout\Searchable;

class UserController extends Controller
{
    //

    public function create(){
        return view('front.register');
    }
    public function store(Request $request){
        $newUser =new User();
        $user = User::where('username', $request->input('username'))->first();
        $data= !$user;
        if($data){
            $newUser->saveUser($request);
            return redirect()->route('get-login')->with('register_data',$data );
        }else {
            return redirect()->back()->withInput()->with('register_data',$data );
        }
    }
    public function getLogin(){
        return view('front.login');
    }
    public function postLogin(Request $request){
        $username= $request->input('username');
        $password= $request->input('password');
        $user= User::with('roles')->where('username','=' ,$username)->first();
        if(isset($user)){
            if(!Hash::check($password, $user->password)){
                return redirect()->back()->withInput()->with('login_data', false);
            }else{
                $user_id_cookie= cookie('user_id_cookie', $user->id, 30);
                $user_name_cookie= cookie('user_name_cookie', $user->name, 30);
                $user_img_cookie= cookie('user_img_cookie', $user->img, 30);
                $user_role_cookie= cookie('user_role_cookie', $user->roles->first()->name, 30);
                return redirect('home')
                        ->withCookie($user_id_cookie)
                        ->withCookie($user_name_cookie)
                        ->withCookie($user_img_cookie)
                        ->withCookie($user_role_cookie);
            }
        }else{
            return redirect()->back()->withInput()->with('login_data', false);
        }
    }
    public function logout(){
        $strUrl = str_replace(url('/'), '', url()->previous());
        $user_id_cookie= Cookie::forget('user_id_cookie');
        $user_name_cookie= Cookie::forget('user_name_cookie');
        $user_img_cookie= Cookie::forget('user_img_cookie');
        $user_role_cookie= Cookie::forget('user_role_cookie');
        if(starts_with($strUrl , '/manage')) {
            return redirect('home')
                ->withCookie($user_name_cookie)
                ->withCookie($user_id_cookie)
                ->withCookie($user_img_cookie)
                ->withCookie($user_role_cookie);
        }else{
            return redirect()->back()
                ->withCookie($user_name_cookie)
                ->withCookie($user_id_cookie)
                ->withCookie($user_img_cookie)
                ->withCookie($user_role_cookie);
        }
    }

    public function profile(){
        $id= Cookie::get('user_id_cookie');
        $user = User::where('id' , '=' , $id)->first();
        return view('front.manage.manage-profile', ['user'=>$user]);
    }
    public function edit(){
        $id= Cookie::get('user_id_cookie');
        $user = User::with('roles')->where('id' , '=' , $id)->first();
        return view('front.manage.manage-update', ['user'=>$user]   );
    }
    public function update(Request $request){
        $id= Cookie::get('user_id_cookie');
        $user = new User();
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $imgName = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('img-upload');
            $image->move($path, $imgName);
            $user->userUpdate($request, $id, $imgName);
            return redirect()->route('user-profile')->with('success','Image Upload successfully');
        }else{
            $user->userUpdate($request, $id, '');
            return redirect()->route('user-profile')->with('success','Image Upload successfully');
        }
        return redirect()->route('user-profile')->withCookie($user_cookie);
    }
    public function account(){
        return view('front.manage.manage-account');
    }
    public function accountUpdate(Request $request, $id){
        $id= Cookie::get('user_id_cookie');
        $user = User::find($id);
        $oldPas =bcrypt($request->input('old-password'));

        if(!Hash::check($oldPas , $user->password)) {
            if ($request->input('new-password') === $request->input('renew-password')) {
                $user->password = bcrypt($request->input('new-password'));
                $user->save();
                return view('front.manage.manage-account')->with('data', 'thay doi thanh cong');
            }
        }
        return view('front.manage.manage-account')->with('data', 'thay doi that bai');
    }
    public function accountDelete($id){
        $user = new User();
        $user->adminDeleteUser($id);
        $user_id_cookie= Cookie::forget('user_id_cookie');
        $user_name_cookie= Cookie::forget('user_name_cookie');
        $user_img_cookie= Cookie::forget('user_img_cookie');
        $user_role_cookie= Cookie::forget('user_role_cookie');
        return redirect()->route('home')
            ->withCookie($user_name_cookie)
            ->withCookie($user_id_cookie)
            ->withCookie($user_img_cookie)
            ->withCookie($user_role_cookie);
    }

//    admin
    public function dashboard(){
        return view('admin.index');
    }
    public function getListUser(){
        $users= User::with('roles')->get();
        return view('admin.list-user', ['users'=>$users]);
    }
    public function userDetail($id){
        $user= User::with('roles')->find($id);
        return view('admin.user-detail', ['user'=>$user]);
    }
    public function userDelete($id){
        $user = new User();
        $user->adminDeleteUser($id);
        return redirect()->route('list-user');
    }
    public function addNewUser(Request $request){
        $newUser =new User();
        $user = User::where('username', $request->input('username'))->first();
        $data= !$user;
        if($data){
            $newUser->saveUser($request);
            return redirect()->route('list-user')->with('add_user_data',$data );
        }else {
            return redirect()->route('list-user')->with('add_user_data',$data );
        }
    }
    public function searchUser(Request $request, $art_id){
        $users =User::search($request->input('search'))->get();
        return view('admin.list-user', ['users'=>$users]);
    }
    public function adminUpdateUser(Request $request, $id){
        $user= new User();
        $user->adminUpdateUser($id, $request);
        return redirect()->back();
    }
}
