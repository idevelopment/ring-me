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

Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('/callbacks', 'CallbackController@index')->name('callbacks.index');
Route::get('/callbacks/register', 'CallbackController@register')->name('callbacks.register');
Route::get('/callbacks/display/{id}', 'CallbackController@edit')->name('callbacks.display');
Route::post('/callbacks', 'CallbackController@store')->name('callbacks.store');

Route::get('/customers', 'CustomersController@index')->name('customers.index');
Route::get('/customers/register', 'CustomersController@register')->name('customers.register');
Route::get('/customers/display/{id}', 'CustomersController@edit')->name('customers.display');
Route::post('/customers', 'CustomersController@store')->name('customers.store');

// Status routes
Route::get('/status/available', 'StaffController@setAvailable')->name('status.available');
Route::get('/status/unavailable', 'StaffController@setUnavailable')->name('status.unavailable');

Route::get('/profile', 'StaffController@profile')->name('staff.index');
Route::get('/staff', 'StaffController@index')->name('profile');
Route::get('/staff/delete/{id}', 'StaffController@destroy')->name('staff.delete');