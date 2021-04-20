<?php

/*
|--------------------------------------------------------------------------
| Bookmark Routes
|--------------------------------------------------------------------------
*/

Route::prefix('bookmarks')->name('bookmarks.')->group(function () {
    Route::get(null, 'BookmarkController@index')->name('index');
    Route::post(null, 'BookmarkController@store')->name('store');
    Route::get('create', 'BookmarkController@create')->name('create');
    Route::get('{bookmark}', 'BookmarkController@show')->name('show');
    Route::put('{bookmark}', 'BookmarkController@update')->name('update');
    Route::delete('{bookmark}', 'BookmarkController@destroy')->name('destroy');
    Route::get('{bookmark}/edit', 'BookmarkController@edit')->name('edit');
    Route::put('{bookmark}/link', 'BookmarkController@accessed')->name('accessed');
});

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/

Route::prefix('categories')->name('categories.')->group(function () {
    Route::get(null, 'CategoryController@index')->name('index');
    Route::post(null, 'CategoryController@store')->name('store');
    Route::get('create', 'CategoryController@create')->name('create');
    Route::get('{category}', 'CategoryController@show')->name('show');
    Route::put('{category}', 'CategoryController@update')->name('update');
    Route::delete('{category}', 'CategoryController@destroy')->name('destroy');
    Route::get('{category}/bookmarks', 'CategoryController@bookmarks')->name('bookmarks');
    Route::get('{category}/edit', 'CategoryController@edit')->name('edit'); 
});
