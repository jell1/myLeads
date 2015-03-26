<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// ****************************************************
// Shows All Leads
// ****************************************************

Route::get('leads', 'LeadController@getLeads');

// ****************************************************
// leadDetail actions
// ****************************************************

Route::get('leadDetail', function() {
	return view('leadDetail');
});
Route::get('leadDetail/{lead_id}', 'LeadController@showLeadDetails');
Route::get('leadDetail/Edit/{lead_id}', 'LeadController@showLeadDetails');

// ****************************************************
// lead add / delete
// ****************************************************

Route::post('lead/add', 'LeadController@add');
Route::get('lead/delete/{lead_id}', 'LeadController@delete');

// ****************************************************
// status change API
// ****************************************************

Route::post('/api/lead/{lead_id}', 'StatusController@apiTest');

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
