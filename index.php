<?php /*include 'inprocess.php';*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<?php 
	session_start();
	include 'inc/header.php'; 

	?>
	<div class="form-container">
		<div class="title">
			<h2>View Result</h2>
		</div>
		<form action="inprocess.php" method="post" onsubmit="return formValidation()">
			<?php /*include 'inc/errors.php';*/ ?>
			<?php include 'inc/alert.php'; ?>
			<div class="input-group">
				<label for="registration no">Registration number</label>
				<input type="text" name="regnum" id="regnum" placeholder="enter registration number" >
				<span id="regError" class="text-danger font-weight-bold"></span>
			</div>
			<div class="input-group">
				<label for="symbol no">Symbol number</label>
				<input type="number" name="symnum" id="symnum" placeholder="enter symbol number" >
				<span id="symError" class="text-danger font-weight-bold"></span>
			</div>
			<div class="input-group">
				<button type="submit" name="show" class="btn">show</button>
			</div>
		</form>
	</div>

	<script>
		function formValidation() {

			var regNum = document.getElementById('regnum').value;
			var symNum = document.getElementById('symnum').value;
			var status = false;

			if (regNum == "") {
				document.getElementById('regError').innerHTML = "* registration number is required"
				return status = false;
			}else{
				document.getElementById('regError').innerHTML = "";
				status = true;
			}

			if (symNum != "") {
				if (symNum.match(num)) {
					document.getElementById('symError').innerHTML = "";
					status = true;
				}else{
					document.getElementBy('symError').innerHTML = "* symbol number must be a number";
					status = false;
				}
			}else{
				document.getElementById('symError').innerHTML = "* symbol number is required";
				status = false;
			}

			return status;
		}
	</script>

</body>
</html>