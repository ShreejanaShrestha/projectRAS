<!DOCTYPE html>
<html>
<head>
	<title>result view page</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<fieldset>
			<legend>Exam result</legend>
		</fieldset>
		<table class="table table-responsive table-bordered">
			<thead>
				<tr>
					<th colspan="10"><center>COMPULSARY</center></th>
				</tr>
				<tr>
					<th rowspan="2"><center>Course</center></th><th colspan="3"><center>full marks</center></th>
					<th colspan="3"><center>pass marks</center></th>
					<th colspan="3"><center>marks obtained</center></th>
				</tr>
				<tr>
					<th>Asst</th><th>Sem</th><th>Practical</th>
					<th>Asst</th><th>Sem</th><th>Practical</th>
					<th>Asst</th><th>Sem</th><th>Practical</th>
				</tr>
			</thead>
			<tbody>     
				<tr>
					<th>computer networks</th>
					<th>20</th><th>60</th><th>20</th>
					<th>08</th><th>24</th><th>08</th>
					<?php
					$result = "";
					if ($cn_marks[0] < 8) {
						?>
						<th><?php print_r($cn_marks[0]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($cn_marks[0]); ?></th>
						<?php
					}
					if ($cn_marks[1] < 24) {
						?>
						<th><?php print_r($cn_marks[1]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($cn_marks[1]); ?></th>
						<?php
					}
					if ($cn_marks[2] < 8) {
						?>
						<th><?php print_r($cn_marks[2]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($cn_marks[2]); ?></th>
						<?php
					}
					?>
				</tr>
				<tr>
					<th>simulation and modeling</th>
					<th>20</th><th>60</th><th>20</th>
					<th>08</th><th>24</th><th>08</th>
					<?php
					if ($sam_marks[0] < 8) {
						?>
						<th><?php print_r($sam_marks[0]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($sam_marks[0]); ?></th>
						<?php
					}
					if ($sam_marks[1] < 24) {
						?>
						<th><?php print_r($sam_marks[1]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($sam_marks[1]); ?></th>
						<?php
					}
					if ($sam_marks[2] < 8) {
						?>
						<th><?php print_r($sam_marks[2]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($sam_marks[2]); ?></th>
						<?php
					}
					?>
				</tr>
				<tr>
					<th>design and analysis of algorithm</th>
					<th>20</th><th>80</th><th>-</th>
					<th>08</th><th>32</th><th>08</th>
					<?php
					if ($daa_marks[0] < 8) {
						?>
						<th><?php print_r($daa_marks[0]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($daa_marks[0]); ?></th>
						<?php
					}

					if ($daa_marks[1] < 32) {
						?>
						<th><?php print_r($daa_marks[1]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($daa_marks[1]); ?></th>
						<?php
					}

					if ($daa_marks[2] < 8) {
						?>
						<th><?php print_r($daa_marks[2]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($daa_marks[2]); ?></th>
						<?php
					}
					?>
				</tr>
				<tr>
					<th>artificial and intelligence</th>
					<th>20</th><th>80</th><th>-</th>
					<th>08</th><th>32</th><th>08</th>
					<?php
					if ($ai_marks[0] < 8) {
						?>
						<th><?php print_r($ai_marks[0]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($ai_marks[0]); ?></th>
						<?php
					}

					if ($ai_marks[1] < 32) {
						?>
						<th><?php print_r($ai_marks[1]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($ai_marks[1]); ?></th>
						<?php
					}

					if ($ai_marks[2] < 8) {
						?>
						<th><?php print_r($ai_marks[2]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($ai_marks[2]); ?></th>
						<?php
					}
					?>
				</tr>
				<tr>
					<th colspan="10"><center>ELECTIVE AND EXTRA ELECTIVE</center></th>
				</tr>
				<tr>
					<th>E-governance</th>
					<th>20</th><th>60</th><th>20</th>
					<th>08</th><th>24</th><th>08</th>
					<?php
					if ($egov_marks[0] < 8) {
						?>
						<th><?php print_r($egov_marks[0]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($egov_marks[0]); ?></th>
						<?php
					}

					if ($egov_marks[1] < 24) {
						?>
						<th><?php print_r($egov_marks[1]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($egov_marks[1]); ?></th>
						<?php
					}

					if ($egov_marks[2] < 8) {
						?>
						<th><?php print_r($egov_marks[2]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($egov_marks[2]); ?></th>
						<?php
					}
					?>
				</tr>
				<tr>
					<th>wireless networking</th>
					<th>20</th><th>60</th><th>20</th>
					<th>08</th><th>24</th><th>08</th>
					<?php
					if ($wn_marks[0] < 8) {
						?>
						<th><?php print_r($wn_marks[0]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($wn_marks[0]); ?></th>
						<?php
					}

					if ($wn_marks[1] < 24) {
						?>
						<th><?php print_r($wn_marks[1]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($wn_marks[1]); ?></th>
						<?php
					}

					if ($wn_marks[2] < 8) {
						?>
						<th><?php print_r($wn_marks[2]); ?><span style="color: red">&nbsp;*</span></th>
						<?php $result = "fail"; ?>
						<?php
					}else{
						?>
						<th><?php print_r($wn_marks[2]); ?></th>
						<?php
					}
					?>
				</tr>
				<tr>
					<td><strong>TOTAL</strong></td>
					<th>120</th>
					<th>400</th>
					<th>80</th>
					<th colspan="3"></th>
					<th><?php include 'asstTotal.php'; ?></th>
					<th><?php include 'semTotal.php'; ?></th>
					<th><?php include 'pracTotal.php'; ?></th>
				</tr>
				<tr>
					<td><strong>GRAND TOTAL</strong></td>
					<th colspan="3" style="text-align: center;">500</th>
					<th colspan="3"></th>
					<th colspan="3" style="text-align: center;"><?php include 'totalAttainMarks.php'; ?></th>
				</tr>
				<tr>
					<th colspan="10"></th>
				</tr>
				<tr>
					<?php 
					if ($result) {
						?>
						<th colspan="10">RESULT : <span style="color: red;"><?php echo "$result"; ?></span><br>PERCENTAGE : &nbsp;<?php include 'percentage.php'; ?></span><br>DIVISION : &nbsp;<?php include 'division.php'; ?><br>NAME : &nbsp; <?php include 'name.php'; ?><br>COLLEGE : &nbsp; <?php include 'college.php'; ?></span></th>
						<?php
					}else{
						$result = "pass";
						?>
						<th colspan="10">RESULT : <span style="color: green;"><?php echo "$result"; ?></span><br>PERCENTAGE : &nbsp;<?php include 'percentage.php'; ?><br>DIVISION : &nbsp;<?php include 'division.php'; ?><br>NAME : &nbsp; <?php include 'name.php'; ?><br>COLLEGE : &nbsp; <?php include 'college.php'; ?></th>
						<?php
					}
					?>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>