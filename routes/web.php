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

// Galerie
// 
Route::get('galerie', 'PagesController@galerie')->name('galerie');
Route::get('showGalerie/{album_id}', 'PagesController@showGalerie')->name('showGalerie')->where('album_id', '[0-9]+');

// Coordonnee
//
Route::get('coordonnee', 'PagesController@coordonnee')->name('coordonnee');

// Profil
//
Route::get('profil', 'PagesController@profil')->name('profil');
Route::get('editprofil/{id}', 'PagesController@editprofil')->name('editprofil');
Route::put('updateprofil/{id}', 'PagesController@updateprofil')->name('updateprofil');
Route::resource('document', 'DocumentController');

// Contact 
//
Route::get('contact', 'PagesController@contact')->name('contact');
Route::post('message', 'PagesController@message')->name('message');

// Contenu
//
Route::resource('contenu', 'ContenuController');

// Unknow 
//
Route::get('documentation', 'PagesController@documentation')->name('documentation');
//Route::get('/home', 'HomeController@index');
// Routes pour le Back-office
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', function () {
                return view('admin.page.dashboard');
            })
            ->name('admin.dashboard');
    Route::get('dashboard', function () {
        route('admin.dashboard');
    });

    // Galerie
    Route::get('photo/create/{album_id}', 'PhotoController@create')->name('photo.create')->where('album_id', '[0-9]+');
    Route::post('photo', 'PhotoController@store')->name('photo.store');
    Route::delete('photo/{id}', 'PhotoController@destroy')->name('photo.destroy')->where('id', '[0-9]+');
    //Route::resource('photo', 'PhotoController');
    Route::resource('album', 'AlbumController');

    // Utilisateurs / Profil
    //
    Route::resource('user', 'UserController');

    // Documents
    //
    Route::get('document', 'DocumentController@home')->name('document.home');
    Route::get('document/create', 'DocumentController@acreate')->name('document.acreate');
    Route::post('document/store', 'DocumentController@astore')->name('document.astore');
    Route::delete('document/destroy','DocumentController@adestroy')->name('document.adestroy');

    // Articles
    //
    Route::resource('article', 'ArticleController');

    // Equipes et Rencontres
    //
    Route::resource('equipe', 'EquipeController');
    Route::resource('rencontre', 'RencontreController');

    Route::get('rencontre/convoquer/{id}', 'RencontreController@convoquer')->name('rencontre.convoquer')->where('id', '[0-9]+');
    Route::post('rencontre/convoquerstore/{id}', 'RencontreController@convoquerstore')->name('rencontre.convoquerstore');

    // Coordonnees
    //
    Route::resource('coordonnee', 'CoordonneeController');
    Route::post('coordonnee/addUserStatut/{id}', 'CoordonneeController@addUserStatut')->name('add_user_statut');
    Route::delete('coordonnee/deleteStatut/{id}', 'CoordonneeController@deleteStatut')->name('deleteStatut');

    // Contenu
    //
    Route::get('contenu/edit/{page}', 'ContenuController@edit')->name('contenu.edit');

    // Message 
    //
    Route::resource('message', 'MessageController');

    // Unknow 
    //
    //    Route::get('contenu/coordonnee/edit', 'ContenuController@coordonnee_edit')->name('coordonnee_edit');
    //    Route::put('contenu/coordonnee', 'ContenuController@coordonnee_update')->name('coordonnee_update');
});
