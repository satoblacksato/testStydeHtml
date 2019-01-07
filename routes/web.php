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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/alertas', 'HomeController@alertas')->name('alertas');

Route::get('/menues', 'HomeController@menues')->name('menues');

Route::get('/forms', 'HomeController@forms')->name('forms');
Route::post('/postForm', 'HomeController@postForm')->name('postForm');
Route::post('/postFormField', 'HomeController@postFormField')->name('postFormField');
