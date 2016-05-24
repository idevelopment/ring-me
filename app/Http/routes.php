<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authencation routes.
Route::auth();

// Department routes.
Route::resource('departments', 'DepartmentController');
Route::post('departments/search', 'DepartmentController@search')->name('departments.search'); 

// API token routes.
Route::post('api/token/create', 'ApiKeyController@makeKey')->name('token.create');

// Home routes
Route::get('/home', 'HomeController@index');

// Callback routes
Route::get('/callbacks', 'CallbackController@index')->name('callbacks.index');
Route::get('/callbacks/register', 'CallbackController@create')->name('callbacks.register');
Route::get('/callbacks/display/{id}', 'CallbackController@edit')->name('callbacks.display');
Route::get('/callbacks/delete/{id}', 'CallbackController@destroy')->name('callbacks.destroy');
Route::post('/callbacks', 'CallbackController@store')->name('callbacks.store');

// Customers routes
Route::get('/customers', 'CustomersController@index')->name('customers.index');
Route::get('/customers/register', 'CustomersController@register')->name('customers.register');
Route::get('/customers/display/{id}', 'CustomersController@edit')->name('customers.display');
Route::post('/customers', 'CustomersController@store')->name('customers.store');

// Status routes
Route::get('/status/available', 'StaffController@setAvailable')->name('status.available');
Route::get('/status/unavailable', 'StaffController@setUnavailable')->name('status.unavailable');

// Profile routes
Route::get('/profile', 'StaffController@profile')->name('staff.index');
Route::post('/profile/update/password', 'ProfileController@updateSecurity')->name('profile.update.security');
Route::post('/profile/update/profile', 'ProfileController@updateProfile')->name('profile.update.profile');

// Staff routes
Route::get('/staff', 'StaffController@index')->name('profile');
Route::get('/staff/edit/{id}', 'StaffController@edit')->name('staff.edit');
Route::post('/staff/edit/{id}', 'StaffController@update')->name('staff.update');
Route::get('/staff/create', 'StaffController@create')->name('staff.create');
Route::post('/staff/create', 'StaffController@store')->name('staff.store');
Route::get('/staff/delete/{id}', 'StaffController@destroy')->name('staff.delete');

Route::get('/staff/getdepartments', 'DepartmentController@get_departments')->name('staff.getdepartments');
Route::get('/staff/getroles', 'StaffController@get_roles')->name('staff.getroles');

// Settings routes
Route::get('/settings', 'SettingsController@index')->name('settings');

// Roles routes
Route::get('/roles', 'RolesController@index')->name('roles');

Route::get('/roles/create', 'RolesController@create')->name('roles.create');
Route::post('/roles/create', 'RolesController@store')->name('roles.store');

Route::get('/roles/edit/{id}', 'RolesController@edit')->name('roles.edit');
Route::post('/roles/edit/{id}', 'RolesController@update')->name('roles.update');
