<?php
require(dirname(__DIR__) . '/auth-library/resources.php');
// Auth::User("");

if (isset($_POST['submit'])) {
	// PERSONAL INFO
	$student_id = $db->real_escape_string($_POST['student_id']);
	$sex = $db->real_escape_string($_POST['sex']);
	$dob = $db->real_escape_string($_POST['dob']);
	$g_name = $db->real_escape_string($_POST['g_name']);
	$g_phone_no = $db->real_escape_string($_POST['g_phone_no']);
	$g_address = $db->real_escape_string($_POST['g_address']);
	$address = $db->real_escape_string($_POST['address']);
	$g_occupation = $db->real_escape_string($_POST['g_occupation$g_occupation']);
	$city = $db->real_escape_string($_POST['city']);
	$postal_code = $db->real_escape_string($_POST['postal_code']);
	$state = $db->real_escape_string($_POST['state']);
	$country = $db->real_escape_string($_POST['country']);
	$leads = $db->real_escape_string($_POST['leads']);

	//Check if all fields are empty
	if (empty($student_id) || empty($sex) || empty($dob) || empty($g_name) || empty($g_phone_no) || empty($g_address) || empty($g_occupation) || empty($address) || empty($city) || empty($state) || empty($country)) {
		echo json_encode(array('success' => 0, 'error_title' => "Form error", 'error_message' => "All fields are required"));
		exit();
	} else {
		$statement_personal = $db->prepare("INSERT INTO student( `student_id`, `user_id`,sex,dob, g_name, g_phone_no,g_address,g_occupation, address, city, postal_code, state, country, leads) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$statement_personal->bind_param("sssssssssssss", $student_id, $sex, $dob, $g_name, $g_phone_no, $g_address, $g_occupation, $city, $postal_code, $state, $country, $leads);
		if ($statement_personal->execute()) {
			echo json_encode(array('success' => 1));
		}
	}
} else {
	echo json_encode(array('success' => 0, 'error_title' => "Fatal", 'error_message' => "Unable to register user"));
}
?>