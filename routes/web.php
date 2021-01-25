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

Route::get('/', '\App\Http\Controllers\MenuController@index')->name('index');
Route::get('/shop', '\App\Http\Controllers\MenuController@shop')->name('shop');
Route::get('/product/{id}', '\App\Http\Controllers\MenuController@product')->name('product');
