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

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/gallery', 'GalleryController@index')->name('gallery.index');
Route::get('/gallery/create', 'GalleryController@create')->name('gallery.create');
Route::get('/gallery/show', 'GalleryController@show')->name('gallery.show');

Route::post('/gallery/create', 'GalleryController@store')->name('gallery.store');
