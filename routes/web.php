<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'category',
    [App\Http\Controllers\CategoryController::class, 'index']
)->name('category.index');

Route::get(
    'createcategory',
    [App\Http\Controllers\CategoryController::class, 'create']
)->name('category.create');

Route::post(
    'savecategory',
    [\App\Http\Controllers\CategoryController::class, 'store']
)->name('category.store');

Route::get('edit/category/{id}',
[\App\Http\Controllers\CategoryController::class,'edit']
)->name('category.edit');

Route::post('edit/category/{id}',
[\App\Http\Controllers\CategoryController::class,'update']
)->name('category.update');

Route::get('category/destroy/{id}',
 [\App\Http\Controllers\CategoryController::class,'destroy']
)->name('category.destroy');
