<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\Upload;
use App\Http\Controllers\addUser;
use App\Http\Controllers\Modify;
 
 

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
if(session()->has('user')){
  return redirect("profile");
  }
  return view("login");

});

Route::get('/logout', function () {
if(session()->has('user')){
   session()->pull('user');
   }
   return redirect("login");
});

route::get("show",function(){
$result=DB::table("users")->get();
 return view("viewuserList",["result"=>$result]);

});

// Route::view("login","login");
Route::view("profile","profile");
// Route::view("show","viewuserList");

Route::view("upload","uploadFile");
Route::get("userLogin",[userAuth::class,"userInfo"]);
Route::get("uploadfile",[Upload::class,"UploadFiles"]);
Route::get("adduser",[addUser::class,"addUserData"]);
Route::get("viewuser",[addUser::class,"ShowData"]);
Route::get("delete/{id}",[Modify::class,"destroy"]);
Route::get("update",[Modify::class,"update"]);