<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('nieuws/{slug}', 'NewsController@show');

Route::get('evenementen/{slug}', 'EventController@show');

Route::get('evenementen', 'EventController@all');

Route::get('nieuws', 'NewsController@all');

Route::get('selectie', 'HomeController@getSelectie');

Route::get('programma', 'HomeController@getProgramma');

Route::get('speler_vd_maand', 'HomeController@getSpelervdMaand');

Route::get('evenementen', 'EventController@all');