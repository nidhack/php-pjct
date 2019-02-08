<?php
$con= mysqli_connect("localhost","root","","trials");
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$add=$_POST['add'];
	$pwd=$_POST['pwd'];
	$sql="INSERT INTO `tbl_reg`(`r_id`, `r_name`, `r_phone`, `r_email`,`r_add`, `pwd`) VALUES (' ','$name','$phone','$email','$add','$pwd')";
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($res)
	{


	header("location:student.php");

	}
	else{
	echo header("sample.php?error=Failed");
	}
	?>
	