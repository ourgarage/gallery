<?php

Route::group(['middleware' => 'web', 'namespace' => 'Ourgarage\Gallery\Http\Controllers'], function () {

    Route::get('/gallery', 'Admin\GalleryPicturesController@index')->name('gallery::pictures::index');

    Route::get('/categories', 'Admin\GalleryCategoriesController@index')->name('gallery::categories::index');

});
