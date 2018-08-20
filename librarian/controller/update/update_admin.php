<?php

	include ('../../dbcon.php');

	if (isset($_POST['edit']))
	{		
		$user_id       = $_POST['user_id'];
		$username      = $_POST['username'];
		$password      = $_POST['password'];
		$fullname      = $_POST['fullname'];
		$mobile_number = $_POST['mobile_number'];
		$email         = $_POST['email'];
		
		mysqli_query($con,"update admin set username ='$username', password ='$password', fullname = '$fullname', mobile_number = '$mobile_number', email = '$email' where user_id = '$user_id'")or die(mysql_error()); ?>
		
		<script>
		window.location="../../admin.php";
		</script>
<?php
	}
?>