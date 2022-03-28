<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Update;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


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




 Route::get('/login',function() {
    return view('loginpage');
 });
 /*Route::get('/',function() {
   return view('welcome');
})->middleware('userauth');*/
Route::get('/',function() {
   return view('userpage');
});
Route::get('/testekle',function() {
   return view('welcome');
});
/*Route::get('{any}',function() {
   return redirect('/');
});*/
Route::get('/userpage',function() {
   return view("userpage");
});
Route::get('/sifre_sifirlama',function(Request $request) {

   return view("sifresifirlama",["email"=>$request->email,"token"=>$request->token]);
  
});
Route::post('adminLogin',"App\Http\Controllers\adminlogin@loginuser");
Route::post('sifreyenile',"App\Http\Livewire\Loginmodal@userisvalid");

 
