<?php 

	include 'inc/dbcon.php';

	$registration_number = "";
	$symbol_number = "";
	$semester = "";

	$errors = array();

	//if the register button is clicked

	if (isset($_POST['show'])) {
		$registration_number = mysqli_real_escape_string($con, $_POST['regnum']);
		$symbol_number = mysqli_real_escape_string($con, $_POST['symnum']);
		
		//ensure that form field are filled properly
		
		if (empty($registration_number)) {
			array_push($errors, "registration number is required");
		}
		if (empty($symbol_number)) {
			array_push($errors, "symbol number is required");
		}
		if ($semester == "1") {
			array_push($errors, "semester is required");
		}

		//if there are no errors

		if (count($errors) == 0) {
			
		}
	}
?>