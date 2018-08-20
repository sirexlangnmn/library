<?php

	include('../../dbcon.php');

	$user_id = $_GET['user_id']; // $_GET dapat. Bawal ang $_POST?

	mysqli_query ($con, "delete from admin where user_id = '$user_id'") or die (mysql_error());

	header('location:../../admin.php');

?>