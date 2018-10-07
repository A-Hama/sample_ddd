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


Route::prefix('shops')->group(function(){
  Route::group(['middleware' => 'auth'], function() {
      Route::post('/{shopName}/items' , 'ItemController@create');
      Route::post('/{shopName}/item/{id}/single_items' , 'SingleItemController@create');
  });
      Route::get('/', 'ShopController@index');
      Route::get('items' , 'ItemController@index');
      Route::get('items/{id}/single_items' , 'SingleItemController@index');
});

Route::prefix('brands')->group(function() {
    Route::get('/', 'BrandController@index');
    Route::get('/{brandName}/items', 'ItemController@index');
    Route::get('/{brandName}/items/{id}/single_items', 'SingleItemController@index');
});

Route::prefix('items')->group(function(){
  Route::get('/', 'ItemController@index');
});

