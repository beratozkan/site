<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Update;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\categories;
use App\Models\userPosts;
use App\Models\user_comments;


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
   return redirect('forum');
});
Route::get('/user-ekle',function() {
   return view('welcome');
});
/*Route::get('{any}',function() {
   return redirect('/');
});*/

Route::get('/sifre_sifirlama',function(Request $request) {

   return view("sifresifirlama",["email"=>$request->email,"token"=>$request->token]);
  
})->middleware("token.control");
Route::get('/forum',function(Request $request) {

   return view("forumindex");
  
});
Route::get('/forum/{sub}/',function(Request $request) {

     // $sub_category = categories::where("name",$c)->get()->first()->id;

      //$working_cat= userPosts::where("post_category_id",$sub_category)->get();

   
   return view("subCategoryPosts",["category_info"=>$request->all()]);
  
})->middleware("categoryIsValid");
Route::get('/test-post',function(Request $request) {

  
return view("subCategoryPosts");

});
Route::get('/forum/{category}/{post_title}/{category_id}',function(Request $request) {
   
   
   return view("livewire.post-detail-page",["post_content"=>$request->post_content]);
   
   })->middleware("postIsValid");
/*Route::get('/forum/{any}',function(Request $request,$any) {

   return view("post_index",["subpost_info" =>$any]);
  
})->middleware("categoryIsValid");*/
Route::post('adminLogin',"App\Http\Controllers\adminlogin@loginuser");
//Route::post('sifreyenile',"App\Http\Livewire\Loginmodal@userİsValid");


