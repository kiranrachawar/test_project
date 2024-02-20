<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
class AddController extends Controller
{
    //
    function addemployees(Request $req)
    {
      $employee= new employee;
      $employee->name=$req->name;
      $employee->age=$req->age;
      $employee->salary=$req->salary;
     // $employee->city_name=$req->city;
      $employee->save();
      return redirect('add');
    }
}
