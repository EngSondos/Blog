<?php

// use App\Http\Controllers\BlockComment;

use App\Http\Controllers\Comments;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Articale;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\user;


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

Route::prefix("articale")->group(function(){
 Route::name('articale.')->group(function(){
    Route::controller(Articale::class)->group(function(){
        Route::get("/edit/{id}", "edit")->name('edit');
        Route::get("/delete/{id}", "delete")->name('delete');
        Route::post("/update", "update")->name("update");
        Route::get("/list", "list")->name('list');
        Route::get("/create",  "create")->name('create');
        Route::post('/store', "store")->name("store");
    });
});
});

Route::prefix("category")->group(function(){
    Route::name("category.")->group(function(){
        Route::controller(CategoryController::class)->group(function(){

            Route::get('/add',  'addCategory')->name('add');
            Route::post('/create', 'createCategory')->name("create");
            Route::get('/list',  'getCategories')->name('list');
            Route::get('/delete', 'delete')->name('delete');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/category', 'Update')->name('update');
        });
    });
});

Route::post('comment/store', [Comments::class,'store'])->name("comment.store");

Route::get('/admin/show',[admin::class,'show']);
Route::get('/admin/edit/{id}',[admin::class,'edit']);
 Route::post('/admin/update',[admin::class,'update']);
 Route::get('/admin/delete/{id}',[admin::class,'delete']);

Route::get("login",[user::class,"login"])->name("login")->middleware("guest");
Route::post("loginrequest",[user::class,"loginRequest"]);;
