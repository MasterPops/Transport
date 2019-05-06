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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/auto', 'CarController@index');
Route::post('/auto/status', 'CarController@status');
Route::post('/auto/add', 'CarController@add');
Route::get('/drivers', 'DriverController@index');
Route::post('/drivers/add', 'DriverController@add');
Route::post('/drivers/status', 'DriverController@status');
Route::post('/drivers/del', 'DriverController@del');
Route::get('/trip', 'TripController@index');
Route::post('/trip/add', 'TripController@index');
Route::get('/support', 'HomeController@support');
Route::get('/profile', 'EditUser@index');
Route::get('/customers', 'CustomerController@index');
Route::post('profile/rename', 'EditUser@rename');
Route::post('profile/repass', 'EditUser@repass');
Route::post('profile/photo', 'EditUser@photo');
