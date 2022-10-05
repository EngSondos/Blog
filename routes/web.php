<?php

use App\Http\Controllers\Category;
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

Route::get('Category/index', [Category::class, "index"]);
Route::get('Category/create', [Category::class, "create"]);
Route::post('Category/store', [Category::class, "store"]);
Route::get('Category/edit/{id}', [Category::class, "edit"]);
Route::get('Category/delete/{id}', [Category::class, "delete"]);
Route::post('Category/update', [Category::class, "update"]);
