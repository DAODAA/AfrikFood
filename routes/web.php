<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductConroller;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', 'App\Http\Controllers\HomeController@about')->name('about page');
Route::get('products', [ProductConroller::class, 'index'])->name('productPage');
Route::get('products/{id}', [ProductConroller::class, 'show'])->name('productShow');
