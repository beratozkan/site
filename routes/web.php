<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Update;


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
 Route::get('/',function() {
   return view('welcome');
})->middleware('userauth');

Route::get('/testekle',function() {
   return view('welcome');
});

Route::post('adminLogin',"App\Http\Controllers\adminlogin@loginuser");

 
