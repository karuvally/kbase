<?php

Route::group(['middleware' => 'web', 'prefix' => 'volunteer', 'namespace' => 'Modules\Volunteer\Http\Controllers'], function()
{
    Route::get('/', 'VolunteerController@index');
});
