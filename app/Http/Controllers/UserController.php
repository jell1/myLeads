<?php namespace App\Http\Controllers;

// use DB;
// use App\Library\Sql;
use Auth;
use Request;
use DB;
use App\Library\Sql;
use App\Models\User;
use App\Http\Controllers\StatusController;

class UserController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	// ***********************************************************
	// Retrieves all Users
	// ***********************************************************

	public function getAllUsers() {
		$users = User::all();
		
		$userNames = [];
		$userIds = [];

		foreach ($users->getArray() as $idx => $user) {
			$userIds[]= $idx;
			$userNames[]= $user->first_name;
		}

		return view("newTaskDetail", ["userIds"=>$userIds, "userNames"=>$userNames]);
	}

}
