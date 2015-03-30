<?php 
namespace App\Models;

use DB;
use App\Library\Sql;


class Task extends Model {
    protected static $table = 'task';
    protected static $key = 'task_id';

}