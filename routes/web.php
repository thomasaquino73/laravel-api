<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::resource('product',ProductController::class);
Route::get('product',[ProductController::class,'index']);
Route::post('product',[ProductController::class,'store']);
Route::delete('product/{id}',[ProductController::class,'destroy']);
Route::get('product/{id}',[ProductController::class,'edit']);
Route::put('product/{id}',[ProductController::class,'update']);