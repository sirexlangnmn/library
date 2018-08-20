<?php

	include ('../../dbcon.php');
	
	if (isset($_POST['submit']))
	{
		$username      = $_POST['username'];
		$password      = $_POST['password'];
		$fullname      = $_POST['fullname'];
		$mobile_number = $_POST['mobile_number'];
		$email         = $_POST['email'];

		mysqli_query($con,"insert into admin (username, password, fullname, mobile_number, email) values('$username','$password','$fullname','$mobile_number', '$email')")or die(mysql_error());

		header('location:../../admin.php');
		
	}
?>