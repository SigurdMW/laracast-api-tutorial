<?php
Route::group(['prefix' => 'api/v1'], function(){
	Route::resource('lessons', 'LessonsController');
	
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
