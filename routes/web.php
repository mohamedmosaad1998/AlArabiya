<?php
Auth::routes(['verify'=>true,'reset'=>true]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {return view('front.pages.about');});
Route::get('/contact', function () {return view('front.pages.contact');});

Route::get('{page}/{subs?}',['uses' => 'PageController@index'])->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
