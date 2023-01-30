<?php
require(dirname(__DIR__) . '/auth-library/resources.php');
// Auth::User("");

if (isset($_POST['submit'])) {
	$user_details = $_SESSION['user_details'];
	// CLEAN AND GATHER PERSONAL INFORMATION
	$user_id = $user_details['user_id'];
	$sex = filter_var($db->real_escape_string($_POST['sex']), FILTER_SANITIZE_STRING);
	$dob = filter_var($db->real_escape_string($_POST['dob']), FILTER_SANITIZE_STRING);
	$address = filter_var($db->real_escape_string($_POST['address']), FILTER_SANITIZE_STRING);
	$city = filter_var($db->real_escape_string($_POST['city']), FILTER_SANITIZE_STRING);
	$state = filter_var($db->real_escape_string($_POST['state']), FILTER_SANITIZE_STRING);
	$country = filter_var($db->real_escape_string($_POST['country']), FILTER_SANITIZE_STRING);
	$applicant_leads = $_POST['leads'];

	// CREATE A CUTOM IMAGE FOR THE USER
	$file_name = make_avatar($user_details['first_name']);

	// CLEAN AND GATHER GUARDIAN INFORMATION
	$gfname = filter_var($db->real_escape_string($_POST['gfname']), FILTER_SANITIZE_STRING);
	$glname = filter_var($db->real_escape_string($_POST['glname']), FILTER_SANITIZE_STRING);
	$gpnum = filter_var($db->real_escape_string($_POST['gpnum']), FILTER_SANITIZE_STRING);
	$goccupation = filter_var($db->real_escape_string($_POST['goccupation']), FILTER_SANITIZE_STRING);
	$grelationship = filter_var($db->real_escape_string($_POST['grelationship']), FILTER_SANITIZE_STRING);
	$gemail = filter_var($db->real_escape_string($_POST['gemail']), FILTER_SANITIZE_STRING);
	$gaddress = filter_var($db->real_escape_string($_POST['gaddress']), FILTER_SANITIZE_STRING);
	$gcity = filter_var($db->real_escape_string($_POST['gcity']), FILTER_SANITIZE_STRING);
	$gstate = filter_var($db->real_escape_string($_POST['gstate']), FILTER_SANITIZE_STRING);
	$gcountry = filter_var($db->real_escape_string($_POST['gcountry']), FILTER_SANITIZE_STRING);
	
	$leads = "";

	// CHECK FOR RETRIEVED LEADS
	if(!empty($applicant_leads)){
		$count = 0;
		// Loop to store and display values of individual checked checkbox.
		foreach($applicant_leads as $selected){
			if(count($applicant_leads) === $count){
				$leads .= $selected;
			}else{
				$leads .= $selected . ", ";
			}

			$count++;
		}
	}

	//Check if all fields are empty
	if (empty($sex) || empty($dob) || empty($address) || empty($city) || empty($state) || empty($country) || empty($gfname) || empty($glname) || empty($gpnum) || empty($goccupation) || empty($grelationship) || empty($gemail) || empty($gaddress) || empty($gcity) || empty($gstate) || empty($gcountry)) {
		echo json_encode(array('success' => 0, 'error_title' => "Form error", 'error_message' => "All fields are required"));
		exit();
	} else {
		$sql_insert_student = $db->prepare("INSERT INTO students(user_id, profile_avatar, sex, date_of_birth, address, city, state, country, leads) VALUES(?,?,?,?,?,?,?,?,?)");
		$sql_insert_student->bind_param("issssssss", $user_id, $file_name, $sex, $dob, $address, $city, $state, $country, $leads);
		$student_id = $db->insert_id;

		$sql_insert_guardian = $db->prepare("INSERT INTO guardians(student_id, first_name, last_name, phone_no, email, occupation, relationship, address, city, state, country) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
		$sql_insert_guardian->bind_param("issssssssss", $gfname, $glname, $gpnum, $gemail, $goccupation, $grelationship, $gaddress, $gcity, $gstate, $gcountry);

		if ($sql_insert_student->execute()) {
			if($sql_insert_guardian->execute()){
				echo json_encode(array('success' => 1));
			}
		}
	}
} else {
	echo json_encode(array('success' => 0, 'error_title' => "Fatal", 'error_message' => "Unable to register user"));
}
?>