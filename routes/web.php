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

Route::group(['middleware' => 'auth'], function() {
  Route::resource('shops', 'ShopController', ['except' => ['index', 'show']]);
  Route::resource('items', 'ItemController', ['except' => ['index', 'show']]);
});


Route::group(['middleware' => 'guest'], function(){
  Route::resource('shops', 'ShopController', ['only' => ['index', 'show']]);
  Route::resource('items', 'ItemController', ['only' => ['index', 'show']]);
});
