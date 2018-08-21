<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Inventory API Routes
Route::get('category', ['as' => 'inventory.category', 'uses' => 'CategoryController@index']);
Route::post('category', ['as' => 'inventory.category.create', 'uses' => 'CategoryController@create']);
Route::get('item', ['as' => 'inventory.item', 'uses' => 'ItemController@index']);
Route::post('item', ['as' => 'inventory.item.create', 'uses' => 'ItemController@create']);
Route::get('item/{id}/{camp}', ['as' => 'inventory.stock', 'uses' => 'ItemController@stock']);
Route::put('item/{id}/{camp}', ['as' => 'inventory.stock.update', 'uses' => 'ItemController@stockUpdate']);
// Route::get('camp/{camp}', ['as' => 'inventory.stock.camp', 'uses' => 'ItemController@campStock']);