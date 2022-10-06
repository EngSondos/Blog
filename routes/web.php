<?php

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
Route::get('/add-category', [CategoryController::class, 'addCategory']);
Route::post('/create-category', [CategoryController::class, 'createCategory'])->name('category.create');
Route::get('/list-category', [CategoryController::class, 'getCategories']);
Route::get('/delete-category/{id}', [CategoryController::class, 'delete']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
Route::post('/update-category', [CategoryController::class, 'Update'])->name('category.update');