<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\MyModel;

class MyController extends Controller
{
    function welcome(Request $request) {
        return view('wl');             
    }
    function Login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $model = new MyModel;
        $model->email = $email;
        $model->password= $password;

        $model -> save();
        return view('return');
    }

    function ShowAll(Request $request){
        $model = new MyModel;
        $model = $model::get();
        return view('ShowAll')->with('model', $model);
    }

    function getID($id){
        $model = new MyModel;
        $model = $model::find($id);
        $model -> delete();
        echo "Delete Success";
    }
    function Update($id){
        return view('update')->with("key",$id);
    }
    function PostUpdate(Request $request){
        $email = $request->email;
        $password = $request->password;
        return view('test')->with('keyemail',$email);
    }
}