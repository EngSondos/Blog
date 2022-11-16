<?php

use App\Http\Controllers\Admin;

use App\Http\Controllers\Comments;
use App\Http\Controllers\Articale;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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
Route::get("login",[LoginController::class,'login'])->name('Login');
Route::Post("loginrequest",[LoginController::class,'LoginRequest'])->name('LoginR');
Route::get('logout',[LogoutController::class,'logout'])->name('logout');
Route::get("/", [Articale::class, 'list'])->name('articale.list');
Route::middleware('isLoggedIn')->prefix("articale")->group(function () {
    Route::name('articale.')->group(function () {
        Route::controller(Articale::class)->group(function () {
            Route::get("/edit/{articale}", "edit")->name('edit');
            Route::get("/delete/{articale}", "delete")->name('delete');
            Route::put("/update/{articale}", "update")->name("update");
            Route::get("/create",  "create")->name('create');
            Route::post('/store', "store")->name("store");
        });
    });
});

Route::middleware('isLoggedIn')->prefix("category")->group(function () {
    Route::name("category.")->group(function () {
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/add',  'create')->name('create');
            Route::post('/create', 'store')->name("store");
            Route::get('/list',  'list')->name('list');
            Route::get('/delete/{category}', 'delete')->name('delete');
            Route::get('/edit/{category}', 'edit')->name('edit');
            Route::post('/update/{category}', 'Update')->name('update');
        });
    });
});
Route::post('comment/store', [Comments::class, 'store'])->name("comment.store");
