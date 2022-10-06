<?php

use App\Http\Controllers\Admin;

use App\Http\Controllers\user;
use Illuminate\Support\Facades\Route;  


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
// Route::group(["middleware"=>"auth"],function(){
Route::get('nav',[Admin::class,"index"]);
Route::get('Admin/create',[Admin::class,"create"])->middleware("admin");
Route::post('Admin/store',[Admin::class,"store"])->middleware("admin");
Route::get('Admin/edit/{id}',[Admin::class,"edit"])->middleware("admin");
Route::get('Admin/delete/{id}',[Admin::class,"delete"])->middleware("admin");
Route::post('Admin/update',[Admin::class,"update"])->middleware("admin");

// });
Route::get("login",[user::class,"login"])->name("login")->middleware("guest");
Route::post("loginrequest",[user::class,"loginRequest"]);;