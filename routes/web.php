<?php

// use App\Http\Controllers\BlockComment;

use App\Http\Controllers\Comments;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Articale;
use App\Http\Controllers\CategoryController;
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
