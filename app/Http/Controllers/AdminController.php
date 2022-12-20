<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function forsubmit(Request $request)
    {
        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password');
        $admin->save();
    }

    public function AboutAdmin()
    {
        $about = Admin::all();
        return view('aboutAdmin', compact('about'));
    }

    public function loginvalidation(Request $request){
        $email=$request->input("email");
        $password=$request->input("password");
        $check= Admin::where('email',$email)->first();
    

         if( $check->email==$email  && $check->password==$password ) {
                return view('adminHome',compact('check'));
        }
        else{  
            $error='This Admin is not in database';
            return view('login')->with('error',$error);
        }
    }
  
    public function resetpass($id){
        $item=Admin::find($id);
        
        return view ('resetpassword',compact('item'));
    }


    public function  reset($id ,Request $request){
        
        $item=Admin::find($id);
        $pass=$request->input('password');
      
        
        $pass2=$request->input('password2');

        if( $pass==$pass2 ) {
           
            
            $item->password=$request->input('password'); 
             $item->save();
             $admin=Admin::find($id);
             return view ('adminHome',compact('admin'));
            return view('adminHome',compact('admin'));
    }
    else{
        $error='Password Not match';
        return view('resetpassword',compact('item'))->with('error',$error);
    }   
    }

    public function update_admin($id){
        $admin=Admin::find($id);
       
        return view ('updateAdmin',compact('admin'));
    }



    public function update($id,Request $request){
        $item=Admin::find($id);
    
        $item->name=$request->input('name');
        $item->email=$request->input('email');
        $item->password=$request->input('password'); 
       $item->save();
       $admin=Admin::find($id);
       return view ('adminHome',compact('admin'));

    }
}

