<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function add_order(Request $request)
    {
        $order = new Order();
        $order->name = $request->input('name');
        $order->contact = $request->input('contact');
        $order->address = $request->input('address');
        $order->itemname = $request->input('iname');
        $order->price = $request->input('price');
        $order->quantity = $request->input('quantity');
        $order->total = $request->input('total');
        $order->save();
        return redirect()->back();
    }

    public function view_orders(){
        $orders=Order::all();
        return view ('viewOrder',compact('orders'));
    }
    public function  delete_order($id){
        $item=Order::find($id);
        $item->delete();
        return redirect()->back();
    }

}
