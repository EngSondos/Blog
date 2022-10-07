<?php

// use App\Http\Controllers\BlockComment;

use App\Http\Controllers\Comments;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Articale;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
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

Route::get("articale/edit/{id}", [Articale::class, "edit"]);
Route::get("articale/delete/{id}", [Articale::class, "delete"])->name('articale.delete');

Route::post("articale/update", [Articale::class, "update"])->name("articale.update");
Route::get("articale/list", [Articale::class, "list"]);
Route::get("articale/create", [Articale::class, "create"]);
Route::post('articale/store', [Articale::class, "store"])->name("articale.store");

Route::get('/add-category', [CategoryController::class, 'addCategory']);
Route::post('/create-category', [CategoryController::class, 'createCategory'])->name('category.create');
Route::get('/list-category', [CategoryController::class, 'getCategories']);
Route::get('/delete-category/{id}', [CategoryController::class, 'delete']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::post('/update-category', [CategoryController::class, 'Update'])->name('category.update');
// });
Route::get("login",[user::class,"login"])->name("login")->middleware("guest");
Route::post("loginrequest",[user::class,"loginRequest"]);;
