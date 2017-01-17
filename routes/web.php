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
Auth::routes();
Route::get('index', 'PagesController@index')->name('index');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('documentation', 'PagesController@documentation')->name('documentation');


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('documentation', 'PagesController@documentation')->name('documentation');


// Routes pour le Back-office
Route::group(['prefix' => 'admin'], function() {

    Route::get('/', function () {
                return view('Admin.page.dashboard');
            })
            ->name('admin.dashboard');

    Route::get('dashboard', function () {
        route('admin.dashboard');
    });

    Route::resource('user', 'UserController');    
    Route::resource('article', 'ArticleController');
    Route::resource('galerie', 'GalerieController');
});
