<!doctype html>
<?php $con= mysqli_connect("localhost","root","","trials"); ?>
<html>
<head>
<meta charset="utf-8">
<title>Trial</title>
</head>

<body bgcolor="#E99305">
<div style="width: 100%; height: auto" >
<div style="position: relative; width: 50%" >
<h1>Registration</h1>
<form action="saction.php" method="post">
<table border="4">
	<tr>
		<th>Name :</th>
		<td><input type="text" id="name" name="name"></td>
	</tr>
	<tr>
		<th>Phone :</th>
		<td><input type="text" id="phone" name="phone"></td>
	</tr>
	<tr><th>Email :</th>
	<td><input type="text" id="email" name="email"></td></tr>

<tr><th>Address</th>
<td><input type="textarea" id="add" name="add"></td></tr> 
<tr><th>Password :</th>
	<td><input type="text" id="pwd" name="pwd"></td>
	</tr>
<tr><td><input type="submit"></td></tr>
</table>
	</form>
	</div>
	<br>
	<div style="position: relative;width: 40%">
		<form action="laction.php" method="post">
<table border="4">
	
	<tr><th>Username:</th>
	<td><input type="text" id="email" name="email"></td></tr>
	<tr><th>Password :</th>
	<td><input type="text" id="pwd" name="pwd"></td>
	</tr>
<tr><td><input type="submit"></td></tr>
</table>
	</form>
	</div>
	</div>
	<br>

</body>
</html>