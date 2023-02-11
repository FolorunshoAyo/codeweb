<?php
require(dirname(__DIR__) . '/auth-library/resources.php');
Auth::User("");

$user_id = $_SESSION['user_id'];

if (isset($_GET["transaction_id"]) && isset($_GET["status"]) && isset($_GET["tx_ref"])) {
	$trans_id = $_GET['transaction_id'];
	$trans_status = $_GET['status'];
	$trans_ref = $_GET['tx_ref'];

	$url = "https://api.flutterwave.com/v3/transactions/" . $trans_id . "/verify";
	//Create cURL session
	$curl = curl_init($url);
	//Turn off SSL checker
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
	//Decide the request that you want
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
	//Set the API headers
	curl_setopt($curl, CURLOPT_HTTPHEADER, [
		// "Authorization: Bearer FLWSECK-39743e6c4b313849e1a091fb9e47b322-X",
		"Authorization: Bearer FLWSECK_TEST-a2811a821fc0113cb78c03ca07632980-X",
		"Content-Type: Application/json"
	]);
	//Run cURL
	$run = curl_exec($curl);
	//Check for erros
	$error = curl_error($curl);
	if ($error) {
		die("Curl returned some errors: " . $error);
	}
	//echo"<pre>" . $run ."</pre>";
	//Convert to json obj
	$result = json_decode($run);	// 		print_r($result);

	if ($result->data->status == "successful") {
		$status = $result->data->status;
		$api_tranx_ref = $result->data->tx_ref;
		$api_amount = $result->data->amount;
		$api_charged_amount = $result->data->charged_amount;
		
		$sql_update_deposits = $db->query("UPDATE deposits SET deposit_status=1, deposit_amount={$api_amount} WHERE transaction_ref='{$api_tranx_ref}' AND user_id={$user_id}");
		$sql_update_form_payment = $db->query("UPDATE users SET has_paid_form = '1' WHERE user_id ={$user_id}");

		if ($sql_update_form_payment) {
			$_SESSION['reg_status'] = "1";		
			header("location: ../payment-success");
		}
		else {
			header("location: ../error");
		}
	}else {
		header("location: ../error");
	}

	curl_close($curl);
}
else {
	header("location: ../");
}
?>