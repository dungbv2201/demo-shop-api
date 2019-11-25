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
Route::get('/',function (){
    dd(\App\Models\Product::all());
});
Route::group(['namespace'=>'Client','middleware' =>'cors'],function(){
    Route::post('carts/update','CartController@update');
    Route::get('carts','CartController@index');
    Route::post('carts/add/{id}','CartController@store');
    Route::post('carts/delete','CartController@delete');
});
