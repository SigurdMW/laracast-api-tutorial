<?php
Route::group(['prefix' => 'api/v1'], function(){
	Route::resource('lessons', 'LessonsController');
});