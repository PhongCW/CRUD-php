<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\MyModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    function welcome(Request $request) {
        return view('wl');             
    }
    function SignUp(Request $request){
        $email = $request->email;
        $password = Hash::make($request->password);

        $model = new MyModel;
        $model->email = $email;
        $model->password= $password;

        $model -> save();
        return view('return');
    }
    function Show(Request $request){
        $model = new MyModel;
        $model = $model::all();
        return view('showAll')->with('key', $model);
    }
    function Delete($id){
        $model = new MyModel;
        $model = $model::find($id);
        $model -> delete();
        return redirect ('show');
    }
    function Update($id){
        $getID = $id;
        return view('update')->with('key', $getID);
    }
    function getUpdate(Request $request, $id){
        $model = new MyModel;
        $model = $model::find($id);
        $newEmail = $request->email;
        $newPassword = bcrypt($request->password);
        $model['email'] = $newEmail;
        $model['password'] = $newPassword;
        $model -> save();
        return redirect('show');
    }
    function Login(Request $request){
        return view('login');
    }
    function LoginToUser(Request $request){
        $email = $request->email;
        $password = $request->password;

        $remember = $request->has('remember') ? true : false;
        $user = new User;
        $user = User::where(['email'=>$email], $remember)->first();
        if(Auth::attempt(['email'=>$email, 'password'=>$password])){
            Auth::login($user);
            return redirect('show');
        }
        else{
            return view('error');
        }
    }
    function Logout(Request $request){
        Auth::logout();
        return view('login');
    }
} 