<?php

/*
|--------------------------------------------------------------------------
| Bookmark Routes
|--------------------------------------------------------------------------
*/

Route::get('/bookmarks', 'BookmarkController@index')->name('bookmarks.index');
Route::post('/bookmarks', 'BookmarkController@store')->name('bookmarks.store');
Route::get('/bookmarks/create', 'BookmarkController@create')->name('bookmarks.create');
Route::get('/bookmarks/{bookmark}/edit', 'BookmarkController@edit')->name('bookmarks.edit');
Route::get('/bookmarks/{bookmark}', 'BookmarkController@show')->name('bookmarks.show');
Route::put('/bookmarks/{bookmark}', 'BookmarkController@update')->name('bookmarks.update');
Route::delete('/bookmarks/{bookmark}', 'BookmarkController@destroy')->name('bookmarks.destroy');
Route::put('/bookmarks/{bookmark}/link', 'BookmarkController@accessed')->name('bookmarks.accessed');

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/

Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
Route::get('/categories/{category}/bookmarks', 'CategoryController@bookmarks')->name('categories.bookmarks');
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
Route::put('/categories/{category}', 'CategoryController@update')->name('categories.update');
Route::delete('/categories/{category}', 'CategoryController@destroy')->name('categories.destroy');
