<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**** Start User Interface ****/
Route::get('/', 'UserInterfaceController@home')->name('UI');
/**** Start User Interface ****/

/**** Start User destiantions ****/
Route::get('/destination', 'UserInterfaceController@index')->name('destination');
/**** Start User destinations ****/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
/******  start menu items***********/
Route::group(['middleware' => ['auth']], function () {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/icons', 'HomeController@icons')->name('home');

});
/****** start menu items***********/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
