<?php

// use App\Http\Controllers\BlockComment;

use App\Http\Controllers\Comments;
use App\Http\Controllers\Controller;

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

Route::get('create', [Comments::class,'create']);
Route::get('show', function () {
    return view('NewComment');
});
Route::post("store",[Comments::class,'store']);
