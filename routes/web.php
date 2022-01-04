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
// views
Route::get('/', 'ViewsController@indexfun')->name('indexroute');
Route::get('/about', 'ViewsController@about')->name('about');
Route::get('/contact', 'ViewsController@contact')->name('contact');
Route::get('/pricing', 'ViewsController@pricing')->name('pricing');
Route::get('/projects', 'ViewsController@projects')->name('projects');
Route::get('/services', 'ViewsController@services')->name('services');




Route::get('/home', 'PropertiesController@propertyTool')->name('properties');
Auth::routes();

Route::get('/auth', 'HomeController@index')->name('auth');

// Admin Side .. 
Route::get('/Properties/add', 'PropertiesController@Addproperty')->name('AddProperties');

Route::post('/Properties/add', 'PropertiesController@store')->name('StoreProperties');

Route::get('/Properties', 'PropertiesController@index')->name('indexProperties');

Route::get('/Properties/edit/{id}', 'PropertiesController@edit')->name('editProperties');

Route::post('/Properties/edit/{id}', 'PropertiesController@update')->name('updateProperties');

Route::get('/Properties/delete/{id}', 'PropertiesController@delete')->name('deleteProperties');




