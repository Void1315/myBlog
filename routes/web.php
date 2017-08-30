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


Route::group(['middleware'=>'web','namespace'=>'blog'],function()
{
	Route::get('/', 'IndexController@index')->name('/');

});
Route::group(['middleware'=>'auth','namespace'=>'admin'],function()
{
	Route::get('admin','AdminController@index')->name('admin');
	Route::any('word','WordController@index')->name('word');
	Route::any('wordconfig','WordController@config')->name('wordconfig');
	Route::any('image','ImageController@index')->name('image');
});

// Auth::routes();
Route::group(['namespace'=>'Auth'],function()
{
	Route::any('login','LoginController@index')->name('login');
});
// Route::get('/home', 'HomeController@index')->name('home');
