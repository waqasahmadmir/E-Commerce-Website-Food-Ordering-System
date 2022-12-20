<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\userController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\OrderController;
use App\Models\Admin;
use App\Models\items;
use App\Models\user;
use App\Models\Contact;
use App\Models\Order;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('aboutAdmin',function(){
    return view('aboutAdmin');
});

Route::get('frontpage',function(){
    return view('frontpage');
});

Route::get('login',function(){
    return view('login');
});

Route::get('sidenavbar',function(){
    return view('sidenavbar');
});
Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::get('/register',function(){
    return view('register');
});


Route::get('adminHome',function(){
    return view('adminHome');
});

Route::get('adminfront',function(){
    return view('adminfront');
});

Route::get('userlogin',function(){
    return view('userlogin');
});

Route::get('userRegister',function(){
    return view('userRegister');
});
Route::get('contactus',function(){
    return view('contactus');
});
Route::get('services',function(){
    return view('services');
});
Route::get('aboutapp',function(){
    return view('aboutapp');
});

Route::get('addItems',function(){
    return view('addItems');
});
Route::get('view_Items',function(){
    return view('view_Items');
});

Route::get('userRegister',function(){
    return view('userRegister');
});

Route::get('customers',function(){
    return view('customers');
});
Route::get('reset',function(){
    return view('reset');
});

Route::get('order',function(){
    return view('order');

});
Route::get('orders',function(){
    return view('orders');
});

Route::get('orderplace',function(){
    return view('orderplace');
});

Route::get('orderitems',function(){
    return view('orderitems');
});

Route::get("/edit_item/{id}",[itemController::class,"updateitems"]);
Route::get("/deletefood/{id}",[itemController::class,"delete_item"]);
Route::post("/update_fooditem/{id}",[itemController::class,"update"]);
Route::get("/add_cart/{itemid}/{userid}",[itemController::class,"ordering"]);
Route::get("/reset_admin/{id}",[AdminController::class,"resetpass"]);
Route::post("/reseting_password/{id}",[AdminController::class,"reset"]);
Route::get("/update_admin/{id}",[AdminController::class,"update_admin"]);
Route::post("/updating_admin/{id}",[AdminController::class,"update"]);
Route::get("/deleteorder/{id}",[OrderController::class,"delete_order"]);

Route::post('/add_admin','App\Http\Controllers\AdminController@forsubmit');
Route::post('/additems','App\Http\Controllers\itemController@aditems');
Route::post('/adduser','App\Http\Controllers\userController@add_user');
Route::post('/addcontacts','App\Http\Controllers\contactController@submitContact');
Route::post('/userloginvalidation','App\Http\Controllers\AdminController@loginvalidation');
Route::post('/loginvalidate','App\Http\Controllers\userController@loginvalidation');
Route::post('/final_order','App\Http\Controllers\OrderController@add_order');


Route::get('/displayitems','App\Http\Controllers\itemController@view_item');
Route::get('/orderitems/{id}','App\Http\Controllers\itemController@for_order');
Route::get('/displayAdmin','App\Http\Controllers\AdminController@AboutAdmin');
Route::get('/displaycustomers','App\Http\Controllers\userController@showUsers');
Route::get('/displaycontacts','App\Http\Controllers\contactController@show_Contacts');
Route::get('/view_orders','App\Http\Controllers\OrderController@view_orders');

