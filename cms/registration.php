<?php 

include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';
include 'regprocess.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>registration page</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	
	<div class="container-fluid"> 
		<!-- Page Heading -->
		<div class="row">

			<div class="col-lg-12">
				<?php include '../inc/alert.php'; ?>
				<h1 class="page-header">
					Student Registration
				</h1>
				<ol class="breadcrumb" style="background: #e0ebeb">
					<li>
						<i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
					</li>
					<li class="active">
						<i class="fa fa-file"></i> Admin panel
					</li>
				</ol>
			</div>
		</div>
	</div>	
	<div class="form-container">
		<div class="title">
			<h2>Registration</h2>
		</div>
		<form action="" method="post">
			<!-- display validation error -->
			<?php include '../inc/errors.php'; ?>
			<div class="input-group">
				<label for="student name">Student name</label>
				<input type="text" name="student" value="<?php echo($student_name); ?>">
			</div>

			<div class="input-group">
				<label for="address">Address</label>
				<input type="text" name="address" value="<?php echo($address); ?>">
			</div>

			<div class="input-group">
				<label for="email id">Email</label>
				<input type="email" name="email" value="<?php echo($email); ?>">
			</div>
			<div class="input-group">
<<<<<<< HEAD
				<label for=" regnum">registration number</label>
				<input type="text" name="registration" value="<?php echo($registration_number); ?>">
=======
				<label for=" regnum">Registration number</label>
				<input type="number" name="registration" value="<?php echo($registration_number); ?>">
>>>>>>> 5f2c0c27ae75ac455e64b16654fadab26217a892
			</div>
			<div class="input-group">
				<label for="symbolnum">Symbol number</label>
				<input type="number" name="symbol" value="<?php echo($symbol_number); ?>">
			</div>
			<div class="input-group">
				<label for="batch">Contact Number</label>
				<input type="number" name="contact" value="<?php echo($contact_number); ?>">
			</div>
			<div class="input-group">
				<label for="batch">Batch</label>
				<input type="number" name="batch" value="<?php echo($batch); ?>">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="register">Register</button>
			</div>
		</form>
	</div>

</body>
</html>

<?php 
include '../inc/template_footer.php';
?>