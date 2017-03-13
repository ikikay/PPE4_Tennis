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
Route::get('/', 'PagesController@index')->name('index');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('documentation', 'PagesController@documentation')->name('documentation');

//Route::get('/home', 'HomeController@index');
Route::get('galerie', 'PagesController@galerie')->name('galerie');
Route::get('showGalerie/{album_id}', 'PagesController@showGalerie')->name('showGalerie')->where('album_id', '[0-9]+');
Route::get('coordonnee', 'PagesController@coordonnee')->name('coordonnee');
Route::get('profil', 'PagesController@profil')->name('profil');
Route::resource('document', 'DocumentController');
Route::post('message', 'PagesController@message')->name('message');


// Routes pour le Back-office
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', function () {
                return view('admin.page.dashboard');
            })
            ->name('admin.dashboard');

    Route::get('dashboard', function () {
        route('admin.dashboard');
    });
    
    //    Route::get('contenu/coordonnee/edit', 'ContenuController@coordonnee_edit')->name('coordonnee_edit');
    //    Route::put('contenu/coordonnee', 'ContenuController@coordonnee_update')->name('coordonnee_update');
    
    // route pour la creation de photo 
    Route::get('photo/create/{album_id}', 'PhotoController@create')->name('photo.create')->where('album_id', '[0-9]+');
    Route::post('photo', 'PhotoController@store')->name('photo.store');
    Route::delete('photo/{id}', 'PhotoController@destroy')->name('photo.destroy')->where('id', '[0-9]+');
    
    Route::resource('user', 'UserController');
    Route::resource('article', 'ArticleController');
    //Route::resource('photo', 'PhotoController');
    Route::resource('album', 'AlbumController');
    Route::resource('contenu', 'ContenuController');
    Route::resource('equipe', 'EquipeController');
    Route::resource('rencontre', 'RencontreController');
    Route::get('rencontre/convoquer/{id}', 'RencontreController@convoquer')->name('rencontre.convoquer')->where('id', '[0-9]+');
    Route::post('rencontre/convoquerstore/{id}', 'RencontreController@convoquerstore')->name('rencontre.convoquerstore');
    Route::resource('coordonnee', 'CoordonneeController');
    Route::post('coordonnee/addUserStatut/{id}', 'CoordonneeController@addUserStatut')->name('add_user_statut');
    Route::delete('coordonnee/deleteStatut/{id}', 'CoordonneeController@deleteStatut')->name('deleteStatut');
    
});
