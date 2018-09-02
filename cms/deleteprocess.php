<?php 

//initializing variables to null.
$symbol_number = "";
$batch = "";

$errors = array();

include '../inc/dbcon.php';
if (isset($_POST['search'])) {

	$symbol_number = mysqli_real_escape_string($con,$_POST['sym_num']);
	$batch = mysqli_real_escape_string($con,$_POST['batch']);

	//ensure that form fields are filled properly..
	if (!empty($symbol_number)) {
		if (!preg_match("/^[0-9]*$/", $symbol_number)) {
			array_push($errors, "invalid symbol number");
		}
	}else{
		array_push($errors, "symbol number is required");
	}

	if (!empty($batch)) {
		if (!preg_match("/^[0-9]*$/", $batch)) {
			array_push($errors, "invalid batch number");
		}
	}else{
		array_push($errors, "batch number is required");
	}

	if (count($errors) == 0) {

		include '../inc/dbcon.php';
		$qry = " SELECT * FROM registration WHERE symbol_num = '$symbol_number' AND batch = '$batch' ";
		$run = mysqli_query($con, $qry);
		if (mysqli_num_rows($run) < 1) {
			
			array_push($errors, "no records founds !");		
		}else{

			while ($data = mysqli_fetch_assoc($run)) {
				?>
				<tr>
					
					<td><?php echo $data['student_name']; ?></td>
					<td><?php echo $data['registration_num'];?></td>
					<td><?php echo $data['symbol_num'];?></td>
					<td><?php echo $data['batch'];?></td>
					
					<td><a href="deletion.php?symnum=<?php echo $data['symbol_num']; ?>">Delete</a></td> 
				</tr>
				<?php
			}
		}
		
	}
}

?>

