<?php
	
	include('../../dbcon.php');
	
	$member_id = $_GET['member_id']; // $_GET dapat. Bawal ang $_POST?

	mysqli_query($con,"delete from member where member_id='$member_id'") or die (mysql_error());
	
	header('location:../../member.php');

?>