<?php 
	include('../../dbcon.php');

	if (isset($_POST['submit']))
	{
		$firstname  = $_POST['firstname'];
		$lastname   = $_POST['lastname'];
		$gender     = $_POST['gender'];
		$address    = $_POST['address'];
		$contact    = $_POST['contact'];
		$type       = $_POST['type'];
		$YearLevel  = $_POST['YearLevel'];
		$Department = $_POST['Department'];
					
		mysqli_query($con,
			"insert into member(firstname,
			                     lastname,
			                       gender,
			                      address,
			                      contact,
			                         type,
			                    YearLevel,
			                   Department,
			                       status)
			          values('$firstname',
			                  '$lastname',
			                    '$gender',
			                   '$address',
			                   '$contact',
			                      '$type',
			                 '$YearLevel',
			                '$Department', 
			                    'Active')")or die(mysql_error());
		 
		 
		header('location:../../member.php');
	}
 ?>	