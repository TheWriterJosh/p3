<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'BestFriendController@index')->name('user.index');
Route::get('/randomuser', 'RandomUserController@index')->name('randomuser.index');
Route::post('/randomuser', 'RandomUserController@generate')->name('randomuser.generate');
Route::get('/loremipsum', 'LoremIpsumController@index')->name('loremipsum.index');
Route::post('/loremipsum', 'LoremIpsumController@generate')->name('loremipsum.generate');
