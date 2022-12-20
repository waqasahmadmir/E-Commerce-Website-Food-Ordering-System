<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    
    public function submitContact(Request $request){

        $contacts=new Contact();
        $contacts->fname=$request->input('fname');
        $contacts->lname=$request->input('lname');
        $contacts->address=$request->input('address');
        $contacts->message=$request->input('message');
        $contacts->save();
        return view('order');

    }

    public function show_Contacts(){
        $showContact=Contact::all();
        return view ('view_ContactUs',compact('showContact'));
    }
}
