<!doctype html>
<?php
$con= mysqli_connect("localhost","root","","trials");
?>
<html>
<head>
<meta charset="utf-8">
<title>Student</title>
</head>
<body >
<?php 
if(isset($_POST['update']))
{
	$id=$_POST['id'];
	$sql2="select * from tbl_reg where r_id='$id'";
	$res1=mysqli_query($con,$sql2);
	$row=mysqli_fetch_array($res1);
			
			$name=$row['r_name'];
			$phone=$row['r_phone'];
			$email=$row['r_email'];
			$add=$row['r_add'];
	?>
	<form action="#" method="post">
<table border="4">
	<tr>
		<th>Name :</th>
		<td><input type="text" id="name" name="name" value="<?php echo($name);?>"></td>
	</tr>
	<tr>
		<th>Phone :</th>
		<td><input type="text" id="phone" name="phone" value="<?php echo($phone);?>"></td>
	</tr>
	<tr><th>Email :</th>
	<td><input type="text" id="email" name="email" value="<?php echo($email);?>"></td></tr>

<tr><th>Address</th>
<td><input type="textarea" id="add" name="add" value="<?php echo($add); ?>"></td></tr> 
<tr><th></th><td><input type="hidden" name="id" value="<?php echo($id);?>">
	<input type="submit" value="update" name="updates"></td></tr>

</table>
	</form>
<?php
}
else
{?>
	
<?php
}
?>
<br>
<br>
<br>

<?php 

	if(isset($_POST['Delete']))
	{
		$id=$_POST["id"];
		$sql="DELETE FROM `tbl_reg` WHERE r_id='$id'";
		$res=mysqli_query($con,$sql);
		
	}
	
if(isset($_POST['updates']))
{
	$id=$_POST["id"];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$add=$_POST['add'];
	$sql="UPDATE `tbl_reg` SET `r_name`='$name',`r_phone`='$phone',`r_email`='$email' ,`r_add`='$add' WHERE r_id='$id'";

	$res=mysqli_query($con,$sql) or die(mysqli_error($con));
	
}
?>
<?php
	$sql1="Select * from tbl_reg";
	$res=mysqli_query($con,$sql1);
	$r=mysqli_num_rows($res);
	if($r)
	{
	?>


<form action="#" method="post">
<table border="2">
<tr>
	<th>Sl.No</th>
	<th>Name</th>
	<th>Email</th>
	<th>Phone</th>
	<th>Address</th></tr>
	<?php
		$sql = "SELECT * FROM `tbl_reg`";
		$res=mysqli_query($con,$sql);
		$i=1;
		while($row = mysqli_fetch_array($res)){ 
			
			$id=$row['r_id'];
			$name=$row['r_name'];
			$phone=$row['r_phone'];
			$email=$row['r_email'];
			$add=$row['r_add'];
	?>
	<tr>
		<td><?php echo($i); ?></td>
		<td><?php echo($name); ?></td>
		<td><?php echo($phone); ?></td>
		<td><?php echo($email); ?></td>
		<td><?php echo($add); ?></td>
		<th><input type="hidden" name="id" value="<?php echo($id);?>">
			<input type="submit" value="update" name="update"</th>
		<th><input type="submit" value="Delete" name="Delete"</th></tr>
	
	<?php
			$i=$i+1;
	}
	}
	?>
	
	</tr>
	
	
</table>
</form>




</body>
</html>
