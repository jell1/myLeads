<?php 
namespace App\Models;

use DB;
use App\Library\Sql;


class Lead extends Model {
    protected static $table = 'lead';
    protected static $key = 'lead_id';

    public function status() {
    	return new Status($this->status_id);
    }

    public function delete() {
	    $sql = 'delete from lead where lead_id = :lead_id';
	    $delete_values = ['lead_id' => $this->lead_id];

	    $results = DB::delete($sql, $delete_values);
	}

	public function leadCount() {
		$sql = 'SELECT count(*) as count FROM lead';
		$leadCount = DB::select($sql);
		return $leadCount[0]->count;
	}

}