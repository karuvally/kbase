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
/*Route::get('/', function () {
    return view('user/user_registration');
});*/
Route::get('/signin', function () {
    return view('login');
    return view('layouts.master');
});

Route::get('/user/dashboard', 'user_module@dash_view');
Route::post('/login_frm','user_module@login');
Route::get('item/{id}/{camp}', ['as' => 'inventory.stock', 'uses' => 'ItemController@stock']);
Route::put('item/{id}/{camp}', ['as' => 'inventory.stock.update', 'uses' => 'ItemController@stockUpdate']);

    // Route::get('camp/{camp}', ['as' => 'inventory.stock.camp', 'uses' => 'ItemController@campStock']);
Route::get('login', 'ViewController@getLogin');
Route::get('register', 'ViewController@getRegister');
Route::get('user-list', 'ViewController@getUsersList');
