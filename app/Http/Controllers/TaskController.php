<?php namespace App\Http\Controllers;

// use DB;
// use App\Library\Sql;
use Auth;
use Request;
use DB;
use App\Library\Sql;
use App\Models\Task;
use App\Http\Controllers\StatusController;

class TaskController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}


	// ******************************************************
	// Adds task to DB and returns all tasks view
	// ******************************************************

	public function add() {
		// Request::all();
		$user_id = Request::input('task-user')
		$type = Request::input('task-type');
		$first_name = Request::input('first_name');
		$last_name = Request::input('last_name');
		$phone = Request::input('phone');
		$email = Request::input('email');
		$duedate = Request::input('duedate');
		$status_id = Request::input('status_id');
		$notes = Request::input('notes');
		$type = Request::input('type');

		$task = new task();
		$task->user_id = $user_id;
		$task->first_name = $first_name;
		$task->last_name = $last_name;
		$task->phone = $phone;
		$task->email = $email;
		$task->duedate = $duedate;
		$task->status_id = $status_id;
		$task->notes = $notes;
		$task->datetime_added = date('Y-m-d H:i:s');
		$task->save();

		$pdo = DB::getPdo();
		$task_id = $pdo->lastInsertId();

		dd($task);
	}
