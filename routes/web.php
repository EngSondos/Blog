<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/show',[admin::class,'show']);
// Route::post('/admin/store',[admin::class,'store']);
Route::get('/admin/edit/{id}',[admin::class,'edit']);
 Route::post('/admin/update',[admin::class,'update']);
 Route::get('/admin/delete/{id}',[admin::class,'delete']);