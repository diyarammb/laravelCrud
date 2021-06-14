<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use DB;
class addUser extends Controller
{



public function addUserData(Request $req){
 
$ins=[

"name"=>$req->input("Name"),
"email"=>$req->input("email"),
"status"=>$req->input("status"),




];
 
$data=DB::table("users")->insert($ins);
if($data){

  return redirect("profile");
} 
}

//insert Data function End;

public function ShowData(){
// $result=DB::table("users")->get();
//  return view("viewuserList",["result"=>$result]);


}


}