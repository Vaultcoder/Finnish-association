<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'HomeController@showWelcome');
Route::get('om-oss', 'AboutController@get_about');
Route::get('app', 'AppController@get_app');

Route::get('admin_page', 'AdminController@admin_page');

Route::get('login', 'UserController@get_login');
Route::post('login', 'UserController@post_login');


//Login needed to access this group
Route::group(array('before' => 'auth'), function() {

	Route::get('admin_page', 'AdminController@admin_page');
	Route::post('admin_page', array('uses' => 'AdminController@add_about'));
	Route::post('admin_page/about', 'AdminController@add_about');
	Route::post('admin_page/app', 'AdminController@add_appinfo');
	Route::get('logout', array('uses' => 'UserController@getLogout'));

	//Delete Routes
	Route::get('admin_page/delete_app/{id?}', 'AdminController@delete_appinfo');
	Route::post('admin_page/delete_appinfo', 'AdminController@delete_appinfo');
	Route::post('admin_page/delete_about', 'AdminController@delete_aboutinfo');

});


