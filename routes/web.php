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


/*
* This route are used for Public users. Ex: Visitors
*/

Route::group(['namespace' => 'Frontend'], function() {
	Route::get('/', 'HomeController@index');
	Route::get('about', 'HomeController@about');	
	Route::get('thank-you', 'InquriesController@thankyou');

	Route::post('inquries', 'InquriesController@store');
});

/*
* This route are used for Admin users
*/

Auth::routes(['verify' => true]);

Route::group(['prefix'=>'dashboard', 'namespace'=>'Backend', 'middleware'=>['auth']], function() {
	
	Route::get('/', 'DashboardController@index');

	// User Management
	Route::get('users', 'UserManagementController@index')->name('users');
	Route::get('users/{user}/edit', 'UserManagementController@edit_role')->name('users.edit.role');
	Route::get('users/{user}', 'UserManagementController@show')->name('users.show');
	Route::PUT('profile/{user}/update', 'ProfileController@update')->name('profile.update');
	Route::PUT('users/{user}', 'UserManagementController@update_role')->name('users.update.role');
	Route::DELETE('users/{user}', 'UserManagementController@destroy')->name('users.destroy');

	// Profile Management
	Route::get('profile', 'ProfileController@show')->name('user.profile');
	Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
	Route::get('profile/settings', 'ProfileController@settings')->name('profile.settings');
	Route::POST('profile/settings/change-password', 'ProfileController@changePassword')
		->name('profile.settings.pass.change');

	// Resource Management	
	Route::resource('routes','RoutesController');
	Route::resource('nodes','NodesController');

	// Route::resource('images','ImageController');
	// Route::resource('brands','BrandsController');
});
