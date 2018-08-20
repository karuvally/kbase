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

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/dashboard', 'user_module@dash_view');
Route::post('/login_frm','user_module@login');
Route::get('/user/dashboard','user_module@dash');
Route::get('logout', array('uses' => 'user_module@doLogout'));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('api')->group(function () {

    // Inventory API Routes

    Route::get('category', ['as' => 'inventory.category', 'uses' => 'CategoryController@index']);
    Route::post('category', ['as' => 'inventory.category.create', 'uses' => 'CategoryController@create']);

    Route::get('item', ['as' => 'inventory.item', 'uses' => 'ItemController@index']);
    Route::post('item', ['as' => 'inventory.item.create', 'uses' => 'ItemController@create']);

    Route::get('item/{id}/{camp}', ['as' => 'inventory.stock', 'uses' => 'ItemController@stock']);
    Route::put('item/{id}/{camp}', ['as' => 'inventory.stock.update', 'uses' => 'ItemController@stockUpdate']);

    // Route::get('camp/{camp}', ['as' => 'inventory.stock.camp', 'uses' => 'ItemController@campStock']);
});