<?php namespace App\Http\Controllers;

// use DB;
// use App\Library\Sql;
use Auth;
use Request;
use DB;
use App\Library\Sql;
use App\Models\Lead;
use App\Http\Controllers\StatusController;

class LeadController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}


	// ******************************************************
	// Adds lead to DB and returns all leads view
	// ******************************************************

	public function add() {
		// Request::all();
		$user_id = Auth::User()->user_id;
		$first_name = Request::input('first_name');
		$last_name = Request::input('last_name');
		$address = Request::input('address');
		$phone = Request::input('phone');
		$email = Request::input('email');
		$credit_score = Request::input('credit_score');
		$appointment = Request::input('appointment');
		$notes = Request::input('notes');
		$type = Request::input('type');

		$lead = new lead();
		$lead->user_id = $user_id;
		$lead->first_name = $first_name;
		$lead->last_name = $last_name;
		$lead->address = $address;
		$lead->phone = $phone;
		$lead->email = $email;
		$lead->credit_score = $credit_score;
		$lead->appointment = $appointment;
		$lead->notes = $notes;
		$lead->type = $type;
		$lead->status_id = 1; // 1 is key for status = Lead
		$lead->datetime_added = date('Y-m-d H:i:s');
		$lead->save();

		$pdo = DB::getPdo();
		$lead_id = $pdo->lastInsertId();

		return redirect('leads');
	}

	// ***********************************************************
	// Retrieves all leads from DB and returns them to view
	// ***********************************************************

	public function getLeads() {
		$user_id = Auth::User()->user_id;
		$leads = Lead::all(['user_id'=> $user_id]);
		$status = [];
		foreach ($leads->getArray() as $idx => $lead) {
			$status[]= StatusController::getStatusByID($lead->status_id);
			
		}
		$lead = new Lead();
		$count = $lead->leadCount();

		return view("leads", ["leads"=>$leads->getArray(), "status"=>$status, 'count'=>$count]);
	}

	// ****************************************************************
	// Populates lead details data for lead_id and returns details view
	// ****************************************************************

	public function showLeadDetails($lead_id) {
		$leadDetail = new Lead($lead_id);
		$appointment = $leadDetail->appointment;
		$date = explode(' ', $appointment);

		return view("leadDetailEdit", ["leadDetail"=>$leadDetail, "date"=>$date[0]]);
	}

	public function editLeadDetails($lead_id) {

		$user_id = Auth::User()->user_id;
		$first_name = Request::input('first_name');
		$last_name = Request::input('last_name');
		$address = Request::input('address');
		$phone = Request::input('phone');
		$email = Request::input('email');
		$credit_score = Request::input('credit_score');
		$appointment = Request::input('appointment');
		$notes = Request::input('notes');
		$type = Request::input('type');

		$lead = new lead($lead_id);
		$lead->user_id = $user_id;
		$lead->first_name = $first_name;
		$lead->last_name = $last_name;
		$lead->address = $address;
		$lead->phone = $phone;
		$lead->email = $email;
		$lead->credit_score = $credit_score;
		$lead->appointment = $appointment;
		$lead->notes = $notes;
		$lead->type = $type;
		$lead->datetime_added = date('Y-m-d H:i:s');
		$lead->save();

		return redirect('leads');

	}

	public function viewNew() {
		
		$leads = Lead::all();
		
		return view('newLeadDetail', ["leads"=>$leads->getArray()]);
	}

	public function delete($lead_id) {
		$leadDelete = new Lead($lead_id);
		$leadDelete->delete();

		return redirect('leads');
	}

	public function updateStatus($lead_id) {
		$status_id = Request::input('status');
		$lead = new Lead($lead_id);
		$lead->status_id = $status_id;
		$lead->save();


		return [$lead_id, Request::input('status')];
	}

	
		
	// public function delete($lead_id) {
	// 	$sql = 'delete from lead where lead_id = :lead_id';
	// 	$delete_values = ['lead_id' => $lead_id];

	// 	$results = DB::delete($sql, $delete_values);

	// 	return redirect('leads');
	// }

	// public function getDog($dog_id) {
	// 	$dog = new Dog($dog_id);
	

	// 	return view('dogprofile', ['dog'=>$dog]);

	// }
	// public function communityImages(){
	// 	$dog = new Dog();
	// 	$d = $dog->getAllImages();

	// 	return view('community', ['dog' => $d]);
	// }


	// public function showEdit($dog_id) {
	// 	$dog = new Dog($dog_id);
	// 	return view('editDogProfile', ['dog'=>$dog]);
	// }

	// public function edit($dog_id) {
	// 	$user_id = Request::input('user_id');
	// 	$name = Request::input('name');
	// 	$tagline = Request::input('tagline');
	// 	$birthday = Request::input('birthday');
	// 	$breed = Request::input('breed');
	// 	$gender = Request::input('gender');
	// 	$weight = Request::input('weight');
	// 	$temperament = Request::input('temperament');
	// 	$license_id = Request::input('license_id');

	// 	$dog = new Dog($dog_id);
	// 	$dog->user_id = $user_id;
	// 	$dog->name = $name;
	// 	$dog->tagline = $tagline;
	// 	$dog->birthday = $birthday;
	// 	$dog->breed = $breed;
	// 	$dog->gender = $gender;
	// 	$dog->weight = $weight;
	// 	$dog->temperament = $temperament;
	// 	$dog->license_id = $license_id;
	// 	$dog->datetime_added = date('Y-m-d H:i:s');
	// 	$dog->save();

	// 	return redirect('dogprofile/' . $dog_id);

	// }


	// public function countLoves($image_id) {
	// 	$dog = new Dog();
	// 	$love = $dog->getImageLoveCount($image_id);
	// 	return ['count' => $love];
	// }

	// public function addLove($image_id) {

	// 	$user = Auth::user();
	// 	$user_id = Auth::id();
	// 	// $user->addLove($image_id);
	// 	$dog = new Dog();

	// 	$dog->addLove($user_id,$image_id);

	// 	$love = $dog->getImageLoveCount($image_id);

	// 	return ['count' => $love];
	// 	//return redirect('community');
	// }
	
}