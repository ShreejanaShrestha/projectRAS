<?php 
//initializing variables
$student_name = "";
$contact_number = "";
$address= "";
$email = "";
$registration_number = "";
$symbol_number = "";
$batch = "";

	$errors = array(); //creating $errors as an array variable.

	//if the register button is clicked...
	include '../inc/dbcon.php';
	if (isset($_POST['register'])) {

		$student_name = mysqli_real_escape_string($con, $_POST['student']);
		$address=mysqli_real_escape_string($con, $_POST['address']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$registration_number = mysqli_real_escape_string($con, $_POST['registration']);
		$symbol_number = mysqli_real_escape_string($con, $_POST['symbol']);
		$contact_number=mysqli_real_escape_string($con, $_POST['contact']);
		$batch = mysqli_real_escape_string($con, $_POST['batch']);

		//ensure that the form field are filled properly(form validation)...
		if (!empty($student_name)) {

			if (!preg_match("/^[a-z A-Z]*$/", $student_name)) {

				array_push($errors, "invalid student name");
			}
		}else{

			array_push($errors, "student name is required");

<<<<<<< HEAD
		}

		if (!empty($college_name)) {

			if (!preg_match("/^[a-z A-Z]*$/", $college_name)) {

				array_push($errors, "invalid college name");

			}
		}else{

			array_push($errors, "college name is required");

=======
		if(!empty($address)) {
			if(!preg_match(" /^[-.?!,;:() A-Za-z0-9]*$/", $address)){
				array_push($errors, "invalid address");
			}
>>>>>>> 5f2c0c27ae75ac455e64b16654fadab26217a892
		}


		//check if email is valid...
		if (!empty($email)) {

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

				array_push($errors, "invalid email address");

			}
		}else{

			array_push($errors, "email address is required");

		}

		if (empty($registration_number)) {

			array_push($errors, "registration number is required");

		}

		if (!empty($symbol_number)) {

			if (!preg_match("/^[0-9]*$/", $symbol_number)) {

				array_push($errors, "invalid symbol number");

			}
		}else{

			array_push($errors, "symbol number is required");

		}

		if (!empty($contact_number)) {
			if (!preg_match("/^\d{10}$/", $contact_number)) {
				array_push($errors, "invalid contact number.Should contain 10 digits");
			}
		}else{
			array_push($errors, "contact number is required");
		}

		if (!empty($batch)) {

			if (!preg_match("/^[0-9]*$/", $batch)) {

				array_push($errors, "invalid batch number");

			}
		}else{

			array_push($errors, "batch is required");

		}

		//check whether the user already exists or not...
		$user_check_query = "SELECT * FROM registrations WHERE symbol_num = '$symbol_number' OR registration_num= '$registration_number' LIMIT 1";
		$result = mysqli_query($con, $user_check_query);
		$student = mysqli_fetch_assoc($result);

		if ($student) {

			if ($student['symbol_num'] == $symbol_number) {

				array_push($errors, "student already exists with this symbol number.");

			}

			if ($student['registration_num'] == $registration_number) {

				array_push($errors, "student already exists with this registration number.");	
			}
		}

		//if there are no errors save to database...
		if (count($errors) == 0) {

<<<<<<< HEAD
			$sql = "INSERT INTO registrations(student_name, college_name, email, registration_num, symbol_num, batch) VALUES ('$student_name','$college_name','$email','$registration_number','$symbol_number','$batch')";
=======
			$sql = "INSERT INTO registration(student_name , address, email, registration_num, symbol_num,contact_num, batch) VALUES ('$student_name','$address','$email','$registration_number','$symbol_number','$contact_number','$batch')";
>>>>>>> 5f2c0c27ae75ac455e64b16654fadab26217a892
			$run = mysqli_query($con, $sql);
			if ($run == 'true') {
				
				$_SESSION['success'] = "student registered successfully.";	
				 //header('location:student_detail.php');		
			}
			
		}

	}

?>