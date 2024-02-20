<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilrController extends Controller
{
    //
    function FileUpload(Request $req)
    {
        //return "file uploaded successfully.";
        return $req->file('file')->store('img');
    }
}
