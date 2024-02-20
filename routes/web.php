<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController1;
use App\Http\Controllers\FilrController;
use App\Http\Controllers\AddController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('login','login');
Route::view('profile','profile');

Route::post("users",[Usercontroller1::class,'getData']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/logout',function(){
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('login');
});

Route::view('upload','upload');

Route::post('upload',[FilrController::class,'FileUpload']);

Route::view('add','addemployees');
Route::post("addemp",[AddController::class,'addemployees']);


















