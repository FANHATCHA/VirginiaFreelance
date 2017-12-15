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
Route::get('/test', 'UserInterfaceController@test')->name('test');

/**** Start User Interface ****/
Route::get('/', 'UserInterfaceController@home')->name('UI');
/**** Start User Interface ****/

/**** Start User destinations ****/
Route::get('/{slug}', 'UserInterfaceController@destinations')->name('ui-destination')->where('slug', '[\w\d\-\_]+');

/**** Start User destinations ****/


Auth::routes();

/******  start menu items***********/
Route::group(['middleware' => ['auth']], function () {

/**Resource controllers**/
Route::resource('sliders', 'SliderCtrl');
Route::resource('hotdeals', 'HotDealsCtrl');
Route::resource('destinations', 'AddDestinationCtrl');
Route::resource('internal-slider', 'InternalSliderCtrl');
Route::resource('tailor-made-trip', 'TailorMadeTripCtrl');
Route::resource('client-experience', 'UXCtrl');
Route::resource('social-media', 'socialMediaCtrl');
//*******************//

/** Exception route to middleware**/
//Route::get('/destination/{slug}', 'UserInterfaceController@destinations')->name('destinations');
/**********************************************************/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/icons', 'HomeController@icons')->name('icons');
Route::get('/ui-homepage', 'HomeController@uiHomepage')->name('ui-homepage');
Route::get('/destinations', 'HomeController@destinations')->name('destinations');

});
/****** start menu items***********/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
