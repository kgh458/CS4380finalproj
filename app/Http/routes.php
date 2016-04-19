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

//routes that will all go to the home page, this page
//should have correct middleware to route the user to 
//the application should they already be logged in, and
//to the login page if they are not
Route::get( '/', 'PagesController@index' );
Route::get( 'index', 'PagesController@index' );
Route::get( 'home', 'PagesController@index' );