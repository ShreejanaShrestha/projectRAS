<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="header">
		<div class="wrapper">
			<div class="headerDiv">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-sm-9">
							<div class="logo">
								<?php 
								$current_page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
								if ($current_page == 'index') {
									?>
									<a href="./"><img src="http://tribhuvan-university.edu.np/wp-content/themes/tu/images/logo.png" alt="logo">
										<!-- <img src="assets/img/logo.png" alt="logo"> -->
									</a>
									<?php
								}else{
									?>
									<a href="../index.php"><img src="http://tribhuvan-university.edu.np/wp-content/themes/tu/images/logo.png" alt="logo">
										<!-- <img src="assets/img/logo.png" alt="logo"> -->
									</a>
									<?php
								}
								?>
							</div>
						</div>
						<div class="col-sm-12 col-sm-3">
							<?php 
							$current_page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
							if ($current_page == 'index') {
								?>
								<div class="login">
									<h4><a href="cms/login.php" ">Admin Login</a></h4>
								</div>
								<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>