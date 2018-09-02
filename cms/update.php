<?php 
include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';
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
$symbol_number = $_REQUEST['symnum'];
$qry = "SELECT * FROM registration WHERE symbol_num = '$symbol_number'";
$run = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($run);

?>

<div class="container">
	<form action="updateData.php" method="post" class="form-horizontal">
        <fieldset>
            <legend style="color:  grey"><b>Update Form</b></legend>
		<div class="form-group">
			<label for="student_name" class="control-label col-sm-3">Student name:</label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="student_name" value="<?php echo $data['student_name']; ?>">
			</div>
		</div>
		<div class="form-group">
            <label for="college_name" class="control-label col-sm-3">Contact number</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="contact_number" value="<?php echo $data['contact_num']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="control-label col-sm-3">Address</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="address" value="<?php echo $data['address']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="control-label col-sm-3">Email:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="batch" class="control-label col-sm-3">Batch:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="batch" value="<?php echo $data['batch']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="symbol_number" class="control-label col-sm-3">Symbol number:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" name="symbol_number" value="<?php echo $data['symbol_num']; ?>">
            </div>
        </div>
        <div class="form-group">
         <label for="registration_number" class="control-label col-sm-3">Registration number:</label>
         <div class="col-sm-7">
            <input type="text" class="form-control" name="registration_number" value="<?php echo $data['registration_num']; ?>">
        </div>
    </div>
    <div class="form-group"> 
       <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" class="btn btn-primary" >Update</button>
         <input type="hidden" name="symNum" value="<?php $data['symbol_num'] ?>">
       </div>
     </div>
 </fieldset>
</form>
</div>


<?php 
include '../inc/template_footer.php';
?>