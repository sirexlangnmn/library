<?php
 
	$con = mysqli_connect ("localhost","root","","project_library_system");

	if (mysqli_connect_error())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>