<?php

namespace App\Http\Controllers;
use App\Models\Signup;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //index login page show
    public function loginPageShow(){
        return view('index');
    }

    //signup page views 
    public function signUp_pageShow(){
        return view('Fontend.singup');
    }
// user data push database 
    public function store(Request $request){

        // dd($request->all());
     $data = new Signup();
     $data->fullname =$request->fullname;
     $data->email = $request->email;
     $data->username = $request->username;
     $data->Password =$request->Password;
     $data->save();
    
     return redirect()->route('login');

    }
    

    //last
}
