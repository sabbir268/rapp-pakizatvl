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


Route::get('/','HomeController@index')->name('home');
Route::get('contents/{slug}','HomeController@all')->name('home_contents');
Route::get('contents/{slug}/{id}','HomeController@view')->name('home_content_view');
Route::get('query','HomeController@queary')->name('home_query');
Route::post('query/store','HomeController@quearyStore')->name('query_store');
Route::get('contact-us','HomeController@contact')->name('contact_us');



Route::get('dashboard','DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('admin/query','DashboardController@queary')->name('admin_query')->middleware('auth');
Route::get('content/{slug}','ContentController@index')->name('content')->middleware('auth');
Route::get('content/add/{slug}','ContentController@create')->name('content_add')->middleware('auth');
Route::post('content/store/{slug}','ContentController@store')->name('content_store')->middleware('auth');
Route::get('content/edit/{slug}/{id}','ContentController@edit')->name('content_edit')->middleware('auth');
Route::post('content/update/{slug}','ContentController@update')->name('content_update')->middleware('auth');
Route::get('content/delete/{slug}/{id}','ContentController@delete')->name('content_delete')->middleware('auth');

Route::get('settings/{slug}','WeBeliveInController@edit')->name('settings')->middleware('auth');
Route::post('settings/update/{slug}/{id}','WeBeliveInController@update')->name('setting_update')->middleware('auth');
Route::post('settings/update/{slug}/{id}','WeBeliveInController@update')->name('setting_update')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
