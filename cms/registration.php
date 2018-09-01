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
				<label for="student name">student name</label>
				<input type="text" name="student" value="<?php echo($student_name); ?>">
			</div>
			<div class="input-group">
				<label for="college name">college name</label>
				<input type="text" name="college" value="<?php echo($college_name); ?>">
			</div>
			<div class="input-group">
				<label for="email id">email</label>
				<input type="email" name="email" value="<?php echo($email) ?>">
			</div>
			<div class="input-group">
				<label for=" regnum">registration number</label>
				<input type="text" name="registration" value="<?php echo($registration_number); ?>">
			</div>
			<div class="input-group">
				<label for="symbolnum">symbol number</label>
				<input type="number" name="symbol" value="<?php echo($symbol_number); ?>">
			</div>
			<div class="input-group">
				<label for="batch">batch</label>
				<input type="number" name="batch" value="<?php echo($batch); ?>">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="register">register</button>
			</div>
		</form>
	</div>

</body>
</html>

<?php 
include '../inc/template_footer.php';
?>