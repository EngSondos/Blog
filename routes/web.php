<?php

<<<<<<< HEAD
use App\Http\Controllers\Articale;
=======
use App\Http\Controllers\Category;
>>>>>>> 401db726bf641e5a489e57b97055a872bad159ee
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

<<<<<<< HEAD
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("articale/create", [Articale::class, "create"]);

Route::post('articale/store', [Articale::class, "store"])->name("store");
=======
Route::get('Category/index', [Category::class, "index"]);
Route::get('Category/create', [Category::class, "create"]);
Route::post('Category/store', [Category::class, "store"]);
Route::get('Category/edit/{id}', [Category::class, "edit"]);
Route::get('Category/delete/{id}', [Category::class, "delete"]);
Route::post('Category/update', [Category::class, "update"]);
>>>>>>> 401db726bf641e5a489e57b97055a872bad159ee
