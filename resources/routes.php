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
Route::get('template', ['contact', 'uses' => 'ContactController@index']);
