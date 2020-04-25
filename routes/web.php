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

Route::get('/leadership','ContentController@leader')->middleware('auth');
Route::get('/add-lead','ContentController@add_leader')->middleware('auth');
Route::post('/save/leadership','ContentController@save_leader')->middleware('auth');
Route::get('/delete/leadership/{id}','ContentController@delete_leader')->middleware('auth');
Route::get('/edit/leadership/{id}','ContentController@edit_leader')->middleware('auth');
Route::post('/update/leadership/{id}','ContentController@update_leader')->middleware('auth');




Route::get('/gallary','ContentController@gallary')->middleware('auth');
Route::get('/add/gallary','ContentController@add_gallary')->middleware('auth');
Route::post('/save/gallary','ContentController@save_gallary')->middleware('auth');
Route::get('/delete/image/{id}','ContentController@delete_gallary')->middleware('auth');
Route::get('/edit/image/{id}','ContentController@edit_gallary')->middleware('auth');
Route::post('/update/gallary/{id}','ContentController@update_gallary')->middleware('auth');


Route::get('/gallary/category','ContentController@gallary_category')->middleware('auth');
Route::get('/add/category','ContentController@add_category')->middleware('auth');
Route::post('/save/category','ContentController@save_category')->middleware('auth');
Route::get('/delete/category/{id}','ContentController@delete_category')->middleware('auth');
Route::get('/edit/category/{id}','ContentController@edit_category')->middleware('auth');
Route::post('/update/category/{id}','ContentController@update_category')->middleware('auth');










Route::get('settings/{slug}','WeBeliveInController@edit')->name('settings')->middleware('auth');
Route::post('settings/update/{slug}/{id}','WeBeliveInController@update')->name('setting_update')->middleware('auth');
Route::post('settings/update/{slug}/{id}','WeBeliveInController@update')->name('setting_update')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
