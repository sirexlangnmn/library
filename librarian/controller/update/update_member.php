<?php 
	
	include('../../dbcon.php');

	if (isset($_POST['submit']))
	{
		$member_id  = $_POST['member_id'];
		$firstname  = $_POST['firstname'];
		$lastname   = $_POST['lastname'];
		$gender     = $_POST['gender'];
		$address    = $_POST['address'];
		$contact    = $_POST['contact'];
		$type       = $_POST['type'];
		$YearLevel  = $_POST['YearLevel'];
		$Department = $_POST['Department'];
		$status     = $_POST['status'];

		mysqli_query($con,
			"update member set firstname = '$firstname',
			 					lastname = '$lastname',
			 					  gender = '$gender',
			 					 address = '$address',
			 					 contact = '$contact',
			 					    type = '$type',
			 			       YearLevel = '$YearLevel',
			 			      Department = '$Department',
			 			          status = '$status'
			 			           where
			 			       member_id ='$member_id'")or die(mysql_error());
										
										
		header('location:../../member.php');
	}
?>	