<?php

use Illuminate\Support\Facades\Route;

/*
|---------------------------
| API Routes To DiningTables |
|---------------------------
*/

Route::group(['middleware' => ['auth:admin-api', 'CheckAdminToken']], function () {
    Route::post('diningtables/store', 'DiningTableController@store');
    Route::post('diningtables/update/{id}', 'DiningTableController@update');
    Route::put('diningtables/active/{id}', 'DiningTableController@updateStatus');
    Route::delete('diningtables/{id}', 'DiningTableController@destroy');
});

Route::get('diningtables', 'DiningTableController@index');
Route::get('diningtables/show/{id}', 'DiningTableController@show');