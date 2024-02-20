<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller1 extends Controller
{
    //
    function getData(Request $req)
    {
       //return $req->input();
       $data=$req->input('username','password');
       $req->session()->put('username,password',$data);
       //echo session('username,password',$data);
       return view('profile');

    }
}
