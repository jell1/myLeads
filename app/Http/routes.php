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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('leads', 'LeadController@getLeads');

Route::get('leadDetail', function() {
	return view('leadDetail');
});

Route::post('lead/add', 'LeadController@add');

Route::post('/api/lead/{lead_id}', 'StatusController@apiTest');

Route::get('leadDetail/{lead_id}', 'LeadController@showLeadDetails');
Route::get('lead/delete/{lead_id}', 'LeadController@delete');

Route::get('leadDetailEdit/{lead_id}', 'LeadController@showLeadDetails');

Route::get('login', function() {
	return view('login');
});

Route::get('taskDetail', function() {
	return view('taskDetail');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
