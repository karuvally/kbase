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
    return Redirect::to('http://149.56.42.47');
});
Route::get('/signin', function () {
    return view('login');
});
Route::get('/dashboard', 'user_module@dash_view');
Route::post('/login_frm','user_module@login');
Route::get('/user/dashboard','user_module@dash');

Route::get('logout', array('uses' => 'user_module@doLogout'));
Route::get('/user/create_user','user_module@create_user');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
