<?php

// ****************************************************
// Home
// ****************************************************

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
// Shows All Tasks
// ****************************************************
Route::get('tasks', function() {
	return view('tasks');
});

// ****************************************************
// Create New Task
// ****************************************************
Route::get('task/add', 'UserController@getAllUsers');
Route::post('task/add', 'TaskController@add');

// ****************************************************
// status change API
// ****************************************************

Route::post('/api/lead/{lead_id}', 'LeadController@updateStatus');

// ****************************************************
// Login Page
// ****************************************************

Route::get('login', function() {
	return view('login');
});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
