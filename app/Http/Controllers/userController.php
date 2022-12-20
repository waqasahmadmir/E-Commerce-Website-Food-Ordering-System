<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function add_user(Request $request){

        $users=new user();
        $users->uname=$request->input('name');
        $users->uemail=$request->input('email');
        $users->contact=$request->input('contact');
        $users->address=$request->input('address');
        $users->password=$request->input('password');
        $users->save();
        return view('userlogin');
    }
    public function showUsers(){
        
        $customer=user::all();
        return view ('customers',compact('customer'));
    }

   
    public function loginvalidation(Request $request){
        $email=$request->input("email");
        $password=$request->input("password");
       
        $check= user::where('uemail',$email)->first();

         if( $check->uemail==$email  && $check->password==$password ) {
                return view('order',compact('check'));
        }

        else{  
         
            $error='Invalid password or Email';
            return view('userlogin')->with('error',$error);
        }
    }
  
}
