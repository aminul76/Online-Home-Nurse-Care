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

Route::get('/','NurseController@index');

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/nurseinfo','NurseController@NureseInfo');
Route::get('/admin/nurseAdd','NurseController@NureseAdd');

Route::get('/create', 'NurseController@create')->name('create');
Route::post('/store', 'NurseController@store')->name('store');

Route::get('/admin/nurseList','NurseController@NureseList');

Route::get('/nursefontList','NurseController@nursefontList');

Route::get('/search','NurseController@search')->name('search');
Route::get('/search','NurseController@search')->name('search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
