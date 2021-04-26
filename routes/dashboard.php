<?php


Route::group(['middleware' => 'checkadmin'], function () {
    Route::post('/dashboard/admin', 'AdminController@store');
    Route::get('/dashboard/admin', 'AdminController@create');
    Route::get('/dashboard/admin/{admin}', 'AdminController@destroy');
    Route::get('/dashboard/admin/{admin}/edit', 'AdminController@edit');
    Route::Put('/dashboard/admin/{admin}', 'AdminController@update');


//<!--  place [CRUD] -->


//category[CRUD]
    Route::post('/dashboard/category', 'CategoryController@store');
    Route::get('/dashboard/category', 'CategoryController@create');
    Route::get('/dashboard/category/{category}', 'CategoryController@destroy');
    Route::get('/dashboard/category/{category}/edit', 'CategoryController@edit');
    Route::Put('/dashboard/category/{category}', 'CategoryController@update');

//Room[CRUD]


//Image[CRUD]
    Route::get('/dashboard/manage_images', 'ImageController@create');
    Route::post('/dashboard/manage_images', 'ImageController@store');
    Route::get('/dashboard/manage_images/{image}', 'ImageController@destroy');
    Route::get('/dashboard/manage_images/{image}/edit', 'ImageController@edit');
    Route::put('/dashboard/manage_images/{image}', 'ImageController@update');

//User[CRUD]
    Route::get('/dashboard/manage_user', 'AdminController@usersread');
    Route::get('/dashboard/manage_user/{user}/edit', 'AdminController@edituser');
    Route::put('/dashboard/manage_user/{user}', 'AdminController@userupdate');
    Route::get('/dashboard/manage_user/{user}', 'AdminController@userdestroy');

});
