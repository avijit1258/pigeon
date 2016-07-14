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

Route::group(['middleware' => 'web'], function () {
     Route::auth();
     Route::get('/home', 'HomeController@index');
     Route::get('/', function () {
    	return view('welcome');
	});

});





// Route::get('/login', 'Auth\AuthController@showLoginForm');
// Route::post('/login', 'Auth\AuthController@login');
// Route::get('/logout', 'Auth\AuthController@logout');





Route::get('/admin/login', function(){
	return view('login.adminLogin');
});

Route::post('/admin/login', 'AdminController@login');
Route::get('/admin/logout',  'AdminController@logout');

// resouce for company
Route::group(['middleware' => 'auth.super_admin_or_company_admin'], function()
{
    Route::resource('users', 'UserController');
});


Route::group(['middleware' => 'auth'], function()
{
	
    Route::resource('counters', 'CounterController');
    Route::resource('buses', 'BusController');
    Route::resource('seats', 'SeatController');
    Route::resource('routes', 'RouteController');
    Route::resource('coaches', 'CoachController');
    Route::resource('route_zones', 'RouteZoneController');
    Route::resource('seat_arrangements' , 'SeatArrangementController');
    Route::resource('coach_departure_times', 'CoachDepartureTimeController');
   
});
Route::group(['middleware' => 'auth.super_admin'], function()
{
	Route::resource('zones', 'ZoneController');
	Route::resource('companies', 'CompanyController');
    Route::resource('seat_types', 'SeatTypeController');
    Route::resource('coach_types', 'CoachTypeController');
	
});

