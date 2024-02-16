<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('/product-add',[ProductController::class,'productAdd'])->name('product_add');
Route::post('/product-store',[ProductController::class,'productStore'])->name('product_story');
Route::get('/product-edit/{id} ',[ProductController::class,'productEdit'])->name('product_edit');
// Route::post('/product-update/{id}',[ProductController::class,'productUpdate'])->name('product_update');
