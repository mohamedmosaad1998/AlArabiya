<?php

Route::get('/','PagesController@home')->name('home');

Route::get('/search','CourseController@search')->name('search');

Route::get('/contact', function () {return view('front.pages.contact');})->name('contact');

Route::resource('course','CourseController')->only(['show','index']);

Route::resource('category','CategoriesController')->only(['show','index']);
Route::resource('news','NewsController')->only(['show','index']);



Route::resource('user','usersController')->only(['show','edit','update'])->middleware('verified');

Route::get('/user/{user}/change-password','usersController@changeView')->name('user.change')->middleware('verified');

Route::post('/user/{user}/change-password','usersController@changePassword')->name('user.change-password')->middleware('verified');
