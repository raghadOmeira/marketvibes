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
    return view('home');
});


Route::get('/categories' , [App\Http\Controllers\TblCategoryController::class , 'index']);
// ||||||||||||||||||
Route::resource('/products', 'App\Http\Controllers\TblProductController');
// ||||||||||||||||||
Route::get('/orders' , [App\Http\Controllers\TblOrderController::class , 'index']);
// ||||||||||||||||||
Route::get('/tags' , [App\Http\Controllers\TblTagController::class , 'index']);
// ||||||||||||||||||
Route::get('/shippings' , [App\Http\Controllers\TblShippingController::class , 'index']);
// ||||||||||||||||||
Auth::routes();
// ||||||||||||||||||
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ||||||||||||||||||