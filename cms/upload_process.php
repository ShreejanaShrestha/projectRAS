<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">

		<?php 

		session_start();
		include '../inc/dbcon.php';

		if (isset($_POST['uploadBtn'])) {

			$fileName = $_FILES['exam_result']['name'];
			$fileTempName = $_FILES['exam_result']['tmp_name'];

			if (empty($fileName)) {

				$_SESSION['error'] = "please choose a file first.";
				header('location:upload_result.php');
				exit();
			}

			//find the extension of file.
			$fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);

			//define allowed extension.
			$allowedExtension = array('csv');
			if (!in_array($fileExtension, $allowedExtension)) {

				$_SESSION['error'] = "Invalid file extension.";
				header('location:upload_result.php');
				exit();

			}else{

						//upload exam result
						$handle = fopen($fileTempName, 'r'); //file in read mode.
						while (($csv_data = fgetcsv($handle,1000,',')) !== FALSE) {

							//student info
							$student_name = $csv_data[0];
							$college_name = $csv_data[1];
							$symbol_number = $csv_data[2];
							$reg_number = $csv_data[3];

							//validating whether the student is registered student or not
							$symbol_reg_number_check = "SELECT * FROM registrations WHERE symbol_num = '$symbol_number' AND registration_num = '$reg_number' LIMIT 1";
							$qry = mysqli_query($con, $symbol_reg_number_check);
							$result = mysqli_num_rows($qry);

							if ($result < 1) {

								$_SESSION['error'] = "symbol number/registration number combination donot match";
								header('location:upload_result.php');
								exit();

							}

							//computer network
							$cn_asst = $csv_data[4];
							$cn_sem = $csv_data[5];
							$cn_prac = $csv_data[6];

							$cn_marks = array();

							array_push($cn_marks, $cn_asst);
							array_push($cn_marks, $cn_sem);
							array_push($cn_marks, $cn_prac);

							$string_cn_marks =  implode(',', $cn_marks);

							//simulation and modeling
							$sam_asst = $csv_data[7];
							$sam_sem = $csv_data[8];
							$sam_prac = $csv_data[9];

							$sim_and_mod_marks =   array();

							array_push($sim_and_mod_marks, $sam_asst);
							array_push($sim_and_mod_marks, $sam_sem);
							array_push($sim_and_mod_marks, $sam_prac);

							$string_sim_and_mod_marks = implode(',', $sim_and_mod_marks);

							//design and analysis of algorithm
							$daa_asst = $csv_data[10];
							$daa_sem = $csv_data[11];
							$daa_prac = $csv_data[12];

							$daa_marks = array();

							array_push($daa_marks, $daa_asst);
							array_push($daa_marks, $daa_sem);
							array_push($daa_marks, $daa_prac);

							$string_daa_marks = implode(',', $daa_marks);

							//artificial intelligence
							$ai_asst = $csv_data[13];
							$ai_sem = $csv_data[14];
							$ai_prac = $csv_data[15];

							$ai_marks = array();

							array_push($ai_marks, $ai_asst);
							array_push($ai_marks, $ai_sem);
							array_push($ai_marks, $ai_prac);

							$string_ai_marks = implode(',', $ai_marks);

							//e-governance
							$egov_asst = $csv_data[16];
							$egov_sem = $csv_data[17];
							$egov_prac = $csv_data[18];

							$egov_marks = array();

							array_push($egov_marks, $egov_asst);
							array_push($egov_marks, $egov_sem);
							array_push($egov_marks, $egov_prac);

							$string_egov_marks = implode(',', $egov_marks);

							//wireless networking
							$wn_asst = $csv_data[19];
							$wn_sem = $csv_data[20];
							$wn_prac = $csv_data[21];

							$wireless_marks = array();

							array_push($wireless_marks, $wn_asst);
							array_push($wireless_marks, $wn_sem);
							array_push($wireless_marks, $wn_prac);

							$string_wireless_marks = implode(',', $wireless_marks);

							//inserting csv data to database
							$qry = "INSERT INTO `results`(`student_name`, `college_name`, `symbol_number`, `reg_number`, `computer_network`, `simulation_and_modeling`, `DAA`, `AI`, `egov`, `wireless_networking`) VALUES ('$student_name','$college_name','$symbol_number','$reg_number','$string_cn_marks','$string_sim_and_mod_marks','$string_daa_marks','$string_ai_marks','$string_egov_marks','$string_wireless_marks')";

							/*var_dump($qry);
							die();*/
							
							$run = mysqli_query($con,$qry);

						}


						if (!$run) {

							$_SESSION['error'] = "error in uploding file";
							header('location:upload_result.php');

						}else{

							$_SESSION['success'] = "file uploaded successfully";
							header('location:upload_result.php');
							exit();
							
						}
					}
				}
				?>
			</div>
		</body>
		</html>