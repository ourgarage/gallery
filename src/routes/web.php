<?php

Route::group([
    'middleware' => 'web',
    'namespace' => 'Ourgarage\Gallery\Http\Controllers',
    'prefix' => 'admin/gallery'
], function () {

    Route::get('pictures', 'Admin\GalleryPicturesController@index')->name('gallery::pictures::index');
    Route::get('pictures/create', 'Admin\GalleryPicturesController@create')->name('gallery::pictures::create');
    Route::post('pictures', 'Admin\GalleryPicturesController@store')->name('gallery::pictures::store');
    Route::put('pictures/{id}', 'Admin\GalleryPicturesController@update')->name('gallery::pictures::update');


    Route::get('categories', 'Admin\GalleryCategoriesController@index')->name('gallery::categories::index');
    Route::get('categories/create', 'Admin\GalleryCategoriesController@create')->name('gallery::categories::create');
    Route::post('categories', 'Admin\GalleryCategoriesController@store')->name('gallery::categories::store');
    Route::put('categories/{id}', 'Admin\GalleryCategoriesController@update')->name('gallery::categories::update');
    Route::get('categories/{id}/edit', 'Admin\GalleryCategoriesController@edit')->name('gallery::categories::edit');
    Route::delete('categories/{id}', 'Admin\GalleryCategoriesController@destroy')->name('gallery::categories::destroy');

});
