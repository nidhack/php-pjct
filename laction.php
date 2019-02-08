<?php
$con= mysqli_connect("localhost","root","","trials");
	
	$email=$_POST['email'];
	
	$pwd=$_POST['pwd'];
	$sql="select * from tbl_reg where r_email='$email'";
	$result=mysqli_query($con,$sql);
	$res=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($res)
	{

		header("location:student.php");

	}
	else{
	echo header("sample.php?error=Failed");
	}
	?>
	