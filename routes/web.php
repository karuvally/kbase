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
Route::get('/', function () {
    return Redirect::to('http://149.56.42.47');
});
/*Route::get('/', function () {
return view('user/user_registration');
});*/
Route::get('/signin', function () {
    return view('login');
});
Route::get('/user/dashboard', 'user_module@dash_view');
Route::post('/login_frm', 'user_module@login');
//Route::get('/user/dashboard','user_module@dash');

Route::group(['middleware' => 'checkuser'], function () {
    Route::get('logout', array('uses' => 'user_module@doLogout'));
    Route::get('/user/create_user', 'user_module@create_user_page');
    Route::post('/user/create_user_form', 'user_module@create_user');

});
Route::get('/user/delete_user', 'user_module@delete_user');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('camp/{camp}', ['as' => 'inventory.stock.camp', 'uses' => 'ItemController@campStock']);
Route::prefix('views')->group(function () {
    Route::get('login', 'ViewController@getLogin');
    Route::get('register', 'ViewController@getRegister');
    Route::get('user-list', 'ViewController@getUsersList');
    Route::get('inventory', 'ViewController@getUsersList');
});
