<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

// Routes pour le front-office

Route::get('index', 'PagesController@index')->name('index');
Route::get('contact', 'PagesController@contact')->name('contact');

Route::group(['prefix' => 'admin'], function () {

    Route::resource('user', 'UserController');
});



Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


// Routes pour le Back-office
Route::group(['prefix' => 'admin'], function() {

    Route::get('/', function () {
                return view('admin.pages.dashboard');
            })
            ->name('admin.dashboard');

    Route::get('dashboard', function () {
        route('admin.dashboard');
    });

    //Ajouter Routes articles
});
