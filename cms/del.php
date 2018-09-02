<?php 

	//initializing variables to null.

$symbol_number = "";
$batch = "";



include '../inc/dbcon.php';
if (isset($_POST['search'])) {

	$symbol_number = mysqli_real_escape_string($con,$_POST['sym_num']);
	$batch = mysqli_real_escape_string($con,$_POST['batch']);

		//ensure that form fields are filled properly

	if (empty($symbol_number) && empty($batch)) {

		$_SESSION['warning'] = "symbol number and batch are required";
		header('location:deletestudent.php');
		exit();
	}else if (empty($symbol_number)) {

		$_SESSION['warning'] = "symbol number is required";
		header('location:deletestudent.php');
		exit();
	} else if (empty($batch)) {

		$_SESSION['warning'] = "batch is required";
		header('location:deletestudent.php');
		exit();
	}else{

		include '../inc/dbcon.php';
		$qry = " SELECT * FROM registration WHERE symbol_num = '$symbol_number' AND batch = '$batch' ";
		$run = mysqli_query($con, $qry);
		if (mysqli_num_rows($run) < 1) {
			
			session_start();
			$_SESSION['error'] = "user not found";
			header('location:deletestudent.php');
			exit();
		}else{

			while ($data = mysqli_fetch_assoc($run)) {
				?>
				<tr>
					<td><?php echo $data['student_name']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['address']; ?></td>
					<td><?php echo $data['registration_num'];?></td>
					<td><?php echo $data['symbol_num'];?></td>
					<td><?php echo $data['batch'];?></td>
					<td><?php echo $data['contact_num'];?></td>td>
					<td><a href="deleteform.php?sid=<?php echo $data['id'];  ?>">Delete</a></td> 
				</tr>
				<?php
			}
		}
		
	}

	
}
?>

