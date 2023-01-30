<?php
require(dirname(__DIR__) . '/auth-library/resources.php');
// Auth::Route("student/");

if (isset($_POST['submit'])) { 
	$username = $db->real_escape_string($_POST['username']);
	$password = $db->real_escape_string($_POST['pwd']);

	if (empty($username) || empty($password)) {
		echo json_encode(array('success' => 0, 'error_title' => "both fields are required"));
	}else {
		$sql = $db->query("SELECT * FROM users WHERE username='{$username}'");
		if ($sql->num_rows == 1) {
			$row = $sql->fetch_assoc();
			$passcode = $row['password'];
			if (password_verify($password, $passcode)) {
			// if ($password === $passcode) {
				if($row['has_paid_form'] == '0' && $row['is_applicant']=='0') {
					//this user had not paid for the application form
					//sent to payment gateway to pay for application form
					json_encode(array('success' => 1, 'redirect' => 'make_payment'));
					header("Location:../make-payment.php");
				}elseif ($row['has_paid_form'] == '1' && $row['is_applicant'] == '0') {
					//this user is made payment for the application form but has not filled the form.
					//redirect user to the application form
					json_encode(array('success' => 1, 'redirect' => 'application_form'));
					header("Location:../application_form.php");
					

				}elseif ($row['is_applicant'] == '1' && $row['is_student']=='0') {
					//this person has filled  the application form but has not selected any course of study
					//redirect to select course page
					 json_encode(array('success' => 1, "redirect" => "select_course"));
					header("Location:../select-course.php");

				}elseif ($row['is_applicant'] == '1' && $row['is_student']=='1') {
					//this  user has selected a course of study and has made payments.
					 json_encode(array('success' => 1, "redirect" => "student_dashboard"));
					header("Location:../student_dashboard.php");

				}
				
                
			}else {
				//Error incorrect password
				echo json_encode(array('success' => 0, "error_title" => "incorrect password"));
			}
		}else {
		//Error incorrect credentials
		echo json_encode(array('success' => 0, "error_title" => "incorrect details"));
		}
	}
// }
}else {
	//Error if not isset
	echo json_encode(array('success' => 0, "error_title" => "fatal"));
}
?>