<? php
 include '../inc/session.php';
include '../inc/template_header.php';
include '../inc/navigation.php';
include 'sendprocess.php';
?>

 
 		<?php include 'inc/header.php'; ?>
		<div class="form-container">
			<div class="title">
				<h2>View Result</h2>
			</div>
 			<form method="POST">
 				<div class="imput-group">
 					<label for="batch">Batch</label>
 					<input type="text" name="batch" id="batch" placeholder="Enter your year" >
					<span id="regError" class="text-danger font-weight-bold"></span>
				</div>

				<div class="input-group">
				<button type="send" name="show" class="btn">Send</button>
				</div>
 			</form>
 		</div>
 

 <?php 
include '../inc/template_footer.php';
?>

 
