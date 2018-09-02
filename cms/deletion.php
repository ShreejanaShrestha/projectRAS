<?php 
	
	include '../inc/dbcon.php';

	$symbol_number = $_REQUEST['symnum'];
	$qry = "DELETE  FROM registration WHERE symbol_num='$symbol_number'";
	$run = mysqli_query($con, $qry);
	if ($run == true) {
		
		session_start();
		$_SESSION['success'] = "student record deleted successfully";
		@header('location:student_detail.php');
		exit();
	}
 ?>