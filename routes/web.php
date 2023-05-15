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

Route::get('/','topicsController@display')->name('index.topics');
Route::get('index/topic/{id}','topicsController@showtopic')->name('index.topic');
Route::get('admin/create','topicsController@create')->name('admin.create');
Route::post('admin/create','topicsController@insert')->name('admin.insert');
Route::post('admin/update_ok/{id}','topicsController@updated')->name('admin.update_ok');
Route::get('other/about', function () {return view('other.about');})->name('other.about');

Route::get('admin/edit/','topicsController@edit')->name('admin.edit');
Route::get('admin/update/{id}','topicsController@update')->name('admin.update');
Route::get('admin/delete','topicsController@delete')->name('admin.delete');
Route::get('admin/deleted/{id}','topicsController@deleted')->name('admin.deleted');
