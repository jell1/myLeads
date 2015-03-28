<?php

Route::get('/', 'LeadController@getLeads');

Route::get('home', 'LeadController@getLeads');

// ****************************************************
// Shows All Leads
// ****************************************************

Route::get('leads', 'LeadController@getLeads');

// ****************************************************
// leadDetail edit
// ****************************************************

Route::get('leadDetail/{lead_id}', 'LeadController@showLeadDetails');
Route::post('leadDetail/{lead_id}', 'LeadController@editLeadDetails');

// ****************************************************
// lead add / delete
// ****************************************************
Route::get('lead/add', 'LeadController@viewNew');
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
