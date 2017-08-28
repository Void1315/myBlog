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
	Route::get('/', 'IndexController@index');

});
Route::group(['middleware'=>'web','namespace'=>'admin'],function()
{
	Route::get('rua','AdminController@index');

});

// Auth::routes();
Route::group(['namespace'=>'Auth'],function()
{
	Route::any('login','LoginController@index');
});
Route::get('/home', 'HomeController@index')->name('home');
