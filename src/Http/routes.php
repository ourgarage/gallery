<?php

Route::group(['middleware' => 'web', 'namespace' => 'Ourgarage\Gallery\Http\Controllers'], function () {

    Route::get('/gallery', 'Admin\GalleryController@index')->name('gallery::index');
//    Route::get('/contacts', 'ContactsController@index')->name('contacts::index');
//
//    Route::get('/admin/contacts', 'ContactsController@adminContactsIndex')->name('contacts::admin::contactsIndex')->middleware('auth');
//    Route::get('/admin/contacts/create', 'ContactsController@adminContactsCreate')->name('contacts::admin::contactCreate')->middleware('auth');
//    Route::get('/admin/contacts/{id}/update', 'ContactsController@adminContactsUpdateGet')->name('contacts::admin::contactUpdate')->middleware('auth');
//    Route::post('/admin/contacts/createOrUpdate/{id?}', 'ContactsController@adminContactsCreateOrUpdatePost')->name('contacts::admin::contactsCreateOrUpdate')->middleware('auth');
//    Route::delete('/admin/contacts/{id}/delete', 'ContactsController@adminContactDelete')->name('contacts::admin::contactDelete')->middleware('auth');
//    Route::post('/admin/contacts/{id}/up', 'ContactsController@adminContactUp')->name('contacts::admin::contactUp')->middleware('auth');
//    Route::post('/admin/contacts/{id}/own', 'ContactsController@adminContactDown')->name('contacts::admin::contactDown')->middleware('auth');
//    Route::post('/admin/contacts/upload/image', 'ContactsController@adminContactImageUpload')->name('contacts::admin::imageUpload')->middleware('auth');

});
