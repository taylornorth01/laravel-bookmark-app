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

Route::get('/bookmarks', 'BookmarkController@index')->name('bookmarks.index');
Route::post('/bookmarks', 'BookmarkController@store')->name('bookmarks.store');
Route::get('/bookmarks/create', 'BookmarkController@create')->name('bookmarks.create');
Route::get('/bookmarks/edit/{bookmark}', 'BookmarkController@edit')->name('bookmarks.edit');
Route::get('/bookmarks/{bookmark}', 'BookmarkController@show')->name('bookmarks.show');
Route::put('/bookmarks/{bookmark}', 'BookmarkController@update')->name('bookmarks.update');