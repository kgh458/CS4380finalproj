<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', 'HomeController@index' );
Route::get( 'index', 'PagesController@index' );
Route::get( 'requests', 'PagesController@requests' );
Route::get( 'inventory', 'PagesController@inventory' );
Route::get( 'forms', 'PagesController@forms' );
Route::get( 'login', 'PagesController@login' );
Route::post( 'user', 'AuthenticateController@authenticate' );

//this route will catch all wrong requests and display
//an error page and/or reroute to the home page
Route::auth();

Route::get('/home', 'HomeController@index');
