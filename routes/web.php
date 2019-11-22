<?php

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

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Client','middleware' =>'cors'],function(){
    Route::get('carts/update','CartController@updateCart');
    Route::get('carts','CartController@index');
    Route::get('carts/add/{id}','CartController@addCart');
    Route::get('carts/delete','CartController@addCart');

});
