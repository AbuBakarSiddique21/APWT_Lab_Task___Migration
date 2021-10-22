<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::get('/',[ProductController::class,'home'])->name('home');

Route::get('/product/add',[ProductController::class,'productAdd'])->name('addproduct');
Route::post('/product/add',[ProductController::class,'productAddSubmit'])->name('addproduct');

Route::get('/product/edit/{id}/{name}',[ProductController::class,'productEdit']);
Route::post('/product/edit',[ProductController::class,'productEditSubmit'])->name('editproduct');

Route::get('/product/list',[ProductController::class,'productList'])->name('productlist');
Route::get('/product/delete/{id}/{name}',[ProductController::class,'deleteProduct']);
Route::get('/product/details/{id}/{name}',[ProductController::class,'productDetails'])->name('productdetails');