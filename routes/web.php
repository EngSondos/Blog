<?php

// use App\Http\Controllers\BlockComment;

use App\Http\Controllers\Comments;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Articale;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\admin;
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
