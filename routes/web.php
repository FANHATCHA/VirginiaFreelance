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
Route::get('/login', 'UserInterfaceController@home')->name('login');
Route::get('/home', 'UserInterfaceController@home')->name('home');
Route::get('/index', 'UserInterfaceController@home')->name('index');

/**** Start User Interface ****/
Route::get('/', 'UserInterfaceController@home')->name('UI');
/**** Start User Interface ****/
Route::get('hot-deals/{slug}', 'UserInterfaceController@UXHotDeals')->name('ux-hot-deals')->where('slug', '[\w\d\-\_]+');
Route::get('rent/{slugLink}', 'UserInterfaceController@rentLongTerm')->name('rent-long-term')->where('slug', '[\w\d\-\_]+');
Route::get('rent/{slugLink}/{slug}', 'UserInterfaceController@openRent')->name('rent-long-term')->where('slug', '[\w\d\-\_]+');
Route::get('for-sale/{slugLink}', 'UserInterfaceController@itemSale')->name('item-sale')->where('slug', '[\w\d\-\_]+');
Route::get('for-sale/{slugLink}/{slug}', 'UserInterfaceController@forSale')->name('toSale')->where('slug', '[\w\d\-\_]+');
Route::get('/pds', 'UserInterfaceController@pds')->name('pds');
Route::get('/contact', 'UserInterfaceController@contact')->name('contact');
Route::post('/save-message', 'SaveMsgCtrl@store')->name('save-message');

Auth::routes();

/******  start menu items***********/
Route::group(['middleware' => ['auth']], function () {

/**Resource controllers**/
Route::resource('sliders', 'SliderCtrl');
Route::resource('hotdeals', 'HotDealsCtrl');
Route::resource('admin-rent', 'RentCtrl');
Route::resource('for-sale', 'ForSaleCtrl');
Route::resource('admin-contact', 'ContactCtrl');
Route::resource('add-photo', 'AddPhotoCtrl');

Route::get('/system-administrators/home', 'HomeController@index')->name('system-administrators/home');
Route::get('/system-administrators/rent', 'HomeController@rent')->name('system-administrators/rent');
Route::get('/system-administrators/for-sale', 'HomeController@forSale')->name('system-administrators/for-sale');
});
/****** start menu items***********/

Route::group(['prefix' => 'system-administrators/admin'], function () {
    Voyager::routes();
});
