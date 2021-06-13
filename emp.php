<?php
$sal = '';
$da = '';
$hra = '';
$pf = '';
$tax = '';
$gross = '';
$net = '';
$state = '';
$state2 = '';
$image_file = $emp_num = $first_name = $last_name = $address = $gender = $designation = $phone = $cat = $amt = $part = '';
if(isset($_POST['emp_submit'])) {
	$image_file = $_POST['image_file'];
	$emp_num = $_POST['emp_num'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$designation = $_POST['designation'];
	$phone = $_POST['phone'];
	$cat = $_POST['cat'];
	$amt = $_POST['amt'];
	$part = $_POST['amt'];
	if($cat == 'part_time'){
		$sal = $part * 100;
		$state = '<!--';
		$state2 = '-->';
	}
	elseif ($cat == 'full_time') {
		if($amt < 10000)
		{
			$da = $amt * 0.45;
			$hra = $amt * 0.10;
			$pf = $amt * 0;
			$tax = $amt * 0;
			$gross = $amt + $da + $hra;
   			$net = $gross - ($tax + $pf);
		}
		elseif ($amt >= 10000 && $amt < 50000) {
			$da = $amt * 0.75;
			$hra = $amt * 0.2;
			$pf = 1200;
			$tax = $amt * 0.05;
			$gross = $amt + $da + $hra;
   			$net = $gross - ($tax + $pf);
		}
		elseif ($amt > 50000) {
			$da = $amt * 0.9;
			$hra = $amt * 0.3;
			$pf = $amt * 0.05;
			$tax = $amt * 0.15;
			$gross = $amt + $da + $hra;
   			$net = $gross - ($tax + $pf);
		}
	}
	elseif ($cat == 'contract') {
		if ($amt < 5000) {
			$da = 200;
			$hra = $amt * 0;
			$tax = $amt * 0;
			$gross = $amt + $da + $hra;
   			$net = $gross - $tax;
		}
		elseif ($amt < 5000 && $amt >= 25000) {
			$da = $amt * 0.15;
			$hra = 1000;
			$tax = $amt * 0.03;
			$gross = $amt + $da + $hra;
   			$net = $gross - $tax;
		}
		elseif ($amt > 25000) {
			$da = $amt * 0.2;
			$hra = $amt * 0.05;
			$tax = $amt * 0.09;
			$gross = $amt + $da + $hra;
   			$net = $gross - $tax;
		}
	}
} 
?>  
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Employee Details</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
	<center><h1>Enter Employee Details</h1></center>
	<div class="w3-container w3-half w3-margin-top">
		<form class="w3-conatiner w3-card-4" method="POST" autocomplete="off">
			<label>Choose Image</label>
			<input class="w3-input" type="file" name="image_file" required>
			<br>
			<input class="w3-input" type="number" name="emp_num" placeholder="Enter EMP Number" required>
			<br>
			<input class="w3-input" type="text" name="first_name" placeholder="Enter First Name" required> 
			<br>
			<input class="w3-input" type="text" name="last_name" placeholder="Enter Last Name">
			<br>
			<textarea class="w3-input" name="address" placeholder="Enter Address" required></textarea>
			<br>
			<label>Select Gender</label>
			<br>
			<input class="w3-radio" type="radio" name="gender" value="male" required>
			<label>Male</label>
			<br>
			<input class="w3-radio" type="radio" name="gender" value="female" required> 
			<label>Female</label>
			<br>
			<br>
			<input class="w3-input" type="text" name="designation" placeholder="Enter Designation" required>
			<br>
			<input class="w3-input" type="phone" name="phone" placeholder="Enter Phone Number" required>
			<br>
			<label>Emp Category</label>
			<br>
			<input class="w3-radio" type="radio" name="cat" value="part_time" onclick="ShowHideDiv()" id="chkYes"required>
			<label>Part Time</label>
			<br>
			<input class="w3-radio" type="radio" name="cat" value="full_time" onclick="ShowHideDivsal()" id="chkSal">
			<label>Full Time</label>
			<br>
			<input class="w3-radio" type="radio" name="cat" value="contract" onclick="ShowHideDivCon()" id="chkCon" required>
			<label>Contract</label>
			<br>
			<br>
			 <input class="w3-input" type="text" name="amt" id="txtBox" placeholder="Enter hrs or basic salary" required>
			 <p style="color:red;">(NOTE: Enter only workng hrs for part time jobs)</p>
			<br>
			<input class="w3-button w3-red w3-right" type="submit" name="emp_submit" value="Submit">
			<br>
			<br>
		</form>
	</div>

	<!--display -->
	<div class="w3-container w3-half w3-margin-top w3-card-4">
			<img src="<?php echo $image_file; ?>" class="w3-round" alt="image" width="250" height="250">
			<hr>
			<table>
				<tr>
				</tr>
				<th></th>
				<th></th>
				<th></th>
				<tr>
					<td><b>EMP number: </b></td>
					<td></td>
					<td><?php echo $emp_num; ?></td>
				</tr>
				<tr>
					<td><b>First Name: </b></td>
					<td></td>
					<td><?php echo $first_name; ?></td>
				</tr>
				<tr>
					<td><b>Last Name: </b></td>
					<td></td>
					<td><?php echo $last_name; ?></td>
				</tr>
				<tr>
					<td><b>Gender: </b></td>
					<td></td>
					<td><?php echo $gender; ?></td>
				</tr>
				<tr>
					<td><b>Address: </b></td>
					<td></td>
					<td><?php echo $address; ?></td>
				</tr>
				<tr>
					<td><b>Designation:  </b></td>
					<td></td>
					<td><?php echo $designation; ?></td>
				</tr>
				<tr>
					<td><b>Phone Number: </b></td>
					<td></td>
					<td><?php echo $phone; ?></td>
				</tr>
				<tr>
					<td><b>Emp Category: </b></td>
					<td></td>
					<td><?php echo $cat; ?></td>
				</tr>

			
<?php if ($cat != 'part_time') {
	?>
	<?php echo $state; ?>
				<tr>
					<td><b>Basic Salary: </b></td>
					<td></td>
					<td><?php echo $amt; ?></td>
				</tr>
				<tr>
					<td><b>DA: </b></td>
					<td></td>
					<td><?php echo $da; ?></td>
				</tr>
				<tr>
					<td><b>HRA: </b></td>
					<td></td>
					<td><?php echo $hra; ?></td>
				</tr>
				<tr>
					<td><b>PF: </b></td>
					<td></td>
					<td><?php echo $pf; ?></td>
				</tr>
				<tr>
					<td><b>TAX: </b></td>
					<td></td>
					<td><?php echo $tax ?></td>
				</tr>
				<tr>
					<td><b>Gross Salary: </b></td>
					<td></td>
					<td><?php echo $gross; ?></td>
				</tr>
				<tr>
					<td><b>Net Salary: </b></td>
					<td></td>
					<td><?php echo $net; ?></td>
				</tr>
			<?php echo $state2; ?>

	<?php
}
else
{
	?>
				<tr>
					<td><b>Number of hr worked: </b></td>
					<td></td>
					<td><?php echo $part; ?></td>
				</tr>
				<tr>
					<td><b>Salary for Part time: </b></td>
					<td></td>
					<td><?php echo $sal; ?></td>
				</tr>
	<?php
}
?>
		</table>
		</div>

</body>
<script type="text/javascript">
</script>
</html>