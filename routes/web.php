<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductConroller;

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

Route::get('/', [HomeController::class, 'index'])->name('homePage');

Route::get('about', 'App\Http\Controllers\HomeController@about')->name('aboutPage');
Route::get('products', [ProductConroller::class, 'index'])->name('productPage');
Route::get('products/{id}', [ProductConroller::class, 'show'])->name('productShow');

Route::middleware('admin')->group(function () {
    Route::get('admin', 'App\Http\Controllers\Admin\AdminController@index')->name('adminHomePage');
    Route::get('admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name('adminProductPage');

    Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name('adminProductStore');


    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')
    ->name('adminProductDelete');

    Route::get('admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name('adminProductEdit');
    Route::put('admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name('adminProductUpdate');
});
Auth::routes();

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cartHome');
Route::get('/cart/delete', 'App\Http\Controllers\CartController@delete')->name('cartDelete');
Route::post('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cartAdd');
