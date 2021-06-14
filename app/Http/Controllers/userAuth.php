<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{


public  function userInfo(Request $req){

  $data=$req->input();
   
  $req->session()->put("user",$data['email']);
 

  return redirect("profile");

   }

}
