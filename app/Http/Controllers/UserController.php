<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;

class UserController extends Controller
{
    //
    public function create(){
        return view('front.register');
    }
    public function store(Request $request){
        $newUser =new User();
        $user = User::where('username', $request->input('register-username'))->first();
        $data= !$user;
        if($data){
            $newUser->saveUser($request);
            return redirect()->route('get-login')->with('register_data',$data );
//            return redirect()->back()->with('register_data',$data );
        }else {
            return redirect()->back()->withInput()->with('register_data',$data );
        }
    }
    public function getLogin(){
        return view('front.login');
    }

    public function postLogin(Request $request){
        $username= $request->input('login-username');
        $password= $request->input('login-password');
        $user= User::where('username','=' ,$username)->first();
        if(isset($user)){
//            dd(!Hash::check($password, $user->password));
            if(!Hash::check($password, $user->password)){
                return redirect()->back()->withInput()->with('login_data', false);
            }else{
                $user_cookie= cookie('user_cookie', $user, 30);
//            return redirect()->back()->withCookie($user_cookie)->with('login_data', true);
//            return response()->withCookie($user_cookie)->with('login_data', true);
//                dd($user_cookie);
                return response()->redirectToRoute('home')->withCookie($user_cookie);
            }
        }else{
            return redirect()->back()->withInput()->with('login_data', false);
        }
    }

    public function logout(){
        $user_cookie= Cookie::get('user_cookie');
        $cookie= Cookie::forget('user_cookie');
        return redirect()->back()->withCookie($cookie);
    }

    public function profile(){
//        $id= Cookie::get('user_cookie')->id;
//        $user = User::where('id' , '=' , $id)->first();
        return view('front.manage.manage-profile');
    }
    public function edit(){
//        $id= Cookie::get('user_cookie')->id;
//        $user = User::where('id' , '=' , $id)->first();
        return view('front.manage.manage-update');
    }
    public function update(Request $request){
        $id= $request->cookie('user_cookie')->id;
        $user = new User();
        $user->userUpdate($id, $request);
        $user_cookie= cookie('user_cookie', User::find($id), 30);
        return redirect()->route('user-profile')->withCookie($user_cookie);
    }
    public function account(){
        return view('front.manage.manage-account');
    }
    public function accountUpdate(){}
    public function accountDelete(){}
}
