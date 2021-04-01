<?php

/*
|--------------------------------------------------------------------------
| Bookmark Routes
|--------------------------------------------------------------------------
*/

Route::get('/bookmarks', 'BookmarkController@index')->name('bookmarks.index');
Route::post('/bookmarks', 'BookmarkController@store')->name('bookmarks.store');
Route::get('/bookmarks/create', 'BookmarkController@create')->name('bookmarks.create');
Route::get('/bookmarks/edit/{bookmark}', 'BookmarkController@edit')->name('bookmarks.edit');
Route::get('/bookmarks/{bookmark}', 'BookmarkController@show')->name('bookmarks.show');
Route::put('/bookmarks/{bookmark}', 'BookmarkController@update')->name('bookmarks.update');
Route::delete('/bookmarks/{bookmark}', 'BookmarkController@destroy')->name('bookmarks.destroy');

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/

Route::get('/categories', 'CategoryController@index')->name('categories.index');