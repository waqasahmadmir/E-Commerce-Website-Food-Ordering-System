<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\items;
use App\Models\user;
class itemController extends Controller
{
    public function aditems(Request $request){

        $item=new items();
        $item->item_name=$request->input('iname');
        $item->item_ingrediants=$request->input('ingarediant');
        $item->price=$request->input('price');
        $item->image=$request->input('image');
        $item->save();
        return view('adminHome');
    }

    public function view_item(){
        $view_all=items::all();
        return view ('view_Items',compact('view_all'));
    }
    public function for_order($id){
        $items=items::all();
        $user=user::find($id);
        return view ('orderplace',compact('items'),compact('user'));
    }

    public function  delete_item($id){
        $item=items::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function  updateitems($id){
        $item=items::find($id);
       
        return view ('updateitem',compact('item'));
    }

    public function  update($id ,Request $request){
        $item=items::find($id);
        $item->item_name=$request->input('iname');
        $item->item_ingrediants=$request->input('ingarediant');
        $item->price=$request->input('price');
        $item->image=$request->input('image');
        $item->save();
        return view("adminHome");
    }
    
    public function ordering($itemid,$userid){
        $item=items::find($itemid);
        $user=user::find($userid);
        return view ('finalorder',compact('item'),compact('user'));
    }
    
}
