<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */

Route::get('template', ['home', 'uses' => 'HomeController@index']);
Route::get('template', ['video', 'uses' => 'VideoController@index']);
Route::get('template', ['modpacks', 'uses' => 'ModpacksController@index']);
Route::get('template', ['about', 'uses' => 'AboutController@index']);
Route::get('template', ['config', 'uses' => 'ConfigController@index']);
Route::get('template', ['actu', 'uses' => 'ActuController@index']);
Route::get('template', ['contact', 'uses' => 'ContactController@index']);
Route::get('template', ['mentions', 'uses' => 'MentionsController@index']);
Route::get('404', ['404', 'uses' => 'ErrorController@index']);

Route::get('single', function(){ return View::make('actus.single'); });
