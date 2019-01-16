<?php


//Show all video
Route::get('/', 'VideoController@show');

//Show upload video page
Route::get('upload', 'VideoController@upload');

//upload new video
Route::post('upload', 'VideoController@upload');

//Show edit video page
Route::get('edit/{ID}', 'EditorController@edit');

//Show all video
Route::post('question', 'QuestionController@add');

//Show all video
Route::post('Spottime', 'VideoController@addspot');
