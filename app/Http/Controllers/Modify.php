<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Modify extends Controller
{
  

 public function destroy($id){
 $trash=DB::table("users")->delete($id);
 if($trash){
 return redirect("show");
}
}//delete function ends

public function update(Request $req){
     $id =$req->input("id");
     echo "<h1 style='text-align:center'> User Id#$id</h1>";
$update=[
     "name"=>$req->input("Name"),
     "email"=>$req->input("email"),
     "status"=>$req->input("status"),
 ];

$up=DB::table("users")->where('id',$id)->update($update);
if($up){

    return redirect("show");
}
 // echo "<pre/>";
 // print_r($update);

}

}
