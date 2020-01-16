<?php
	// Create a simple HTML form and accept the user name and display the name through PHP echo statement
	$name = $_POST['uname'];
	echo $name;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		Enter Username : <br>
		<input type="text" name="uname">
		<input type="submit" name="btn">
	</form>
</body>
</html>
