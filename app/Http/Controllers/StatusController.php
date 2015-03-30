<?php namespace App\Http\Controllers;

// use DB;
// use App\Library\Sql;
use Auth;
use Request;
use DB;
use App\Library\Sql;
use App\Models\Lead;

class StatusController extends Controller {

	// ***************************************************
	// Retrieves Lead Status
	// ***************************************************


	public static function getStatus($status_id) {
		$sql = "select * from status where status_id = :status_id";

		$sql_values = [
			':status_id' => $status_id
		];

		$status = DB::select($sql, $sql_values);

		print_r($status);	
		return $status;


	}

	public static function getStatusByID($status_id) {
		$sql = "select status from status where status_id = :status_id";
		$stat = '';
		$sql_values = [
			':status_id' => $status_id
		];

		$status = DB::select($sql, $sql_values);

		foreach ($status as $key => $statobj) {
			$stat = $statobj->status;
			
		}

		return $stat;


	}


	// public function updateStatus($lead_id, $status_id) {


	// }

}