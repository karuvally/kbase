<?php

Route::group(['middleware' => 'web', 'prefix' => 'volunteer', 'namespace' => 'Modules\Volunteer\Http\Controllers'], function()
{
    Route::resource('/', 'VolunteerController');
});
