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

// Home routes
Route::get('/home', 'HomeController@index');

// Callback routes
Route::get('/callbacks', 'CallbackController@index')->name('callbacks.index');
Route::get('/callbacks/register', 'CallbackController@create')->name('callbacks.register');
Route::get('/callbacks/display/{id}', 'CallbackController@edit')->name('callbacks.display');
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

// Staff routes
Route::get('/staff', 'StaffController@index')->name('profile');
Route::get('/staff/edit/{id}', 'StaffController@edit')->name('staff.edit');
Route::post('/staff/edit/{id}', 'StaffController@update')->name('staff.update');
Route::get('/staff/create', 'StaffController@create')->name('staff.create');
Route::post('/staff/create', 'StaffController@store')->name('staff.store');
Route::get('/staff/delete/{id}', 'StaffController@destroy')->name('staff.delete');

Route::get('/staff/getdepartments', 'DepartmentController@get_departments')->name('staff.getdepartments');

// Settings routes
Route::get('/settings', 'SettingsController@index')->name('settings');