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

Route::get('/', 'PagesController@index');
Route::get('test', 'PagesController@test');

Route::resource('events', 'EventsController');
Route::get('events/{id}/highlight', 'EventsController@highlight');

Auth::routes();

Route::get('profile', 'ProfileController@index');

Route::get('admin', 'AdminController@index')->middleware('admin');
Route::post('admin', 'AdminController@search')->middleware('admin');