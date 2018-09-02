
<?php 

include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';
//include 'student_detail.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<?php
				include '../inc/alert.php'; 
				?>
				<h1 class="page-header">
					Dashboard
					<small>Blog admin page</small>
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
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>

<?php 
include '../inc/dbcon.php';
$studentName = $_POST['student_name'];
$contactNumber = $_POST['contact_number'];
$address= $_POST['address'];
$email = $_POST['email'];
$batch = $_POST['batch'];
$symbolNumber = $_POST['symbol_number'];
$registrationNumber = $_POST['registration_number'];
/*echo $symbolNumber; die();*/

$qry = "UPDATE registration SET symbol_num='$symbolNumber', registration_num='$registrationNumber', address='$address', student_name='$studentName', contact_num='$contactNumber', email='$email',batch='$batch' WHERE symbol_num='$symbolNumber'";
$run = mysqli_query($con, $qry);
if ($run == true) {
	echo " Records Successfully updated ";
	 //header('location:student_detail.php');
}else{
	echo "error";
}

/*if ($run == true) {
	$_SESSION['success'] = "Data updated successfully";
	@header('location:updatestudent.php');
	exit();
}*/
?>


<?php

include '../inc/template_footer.php';

?>


