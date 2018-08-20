<?php

	include('../../dbcon.php');
	
	$book_id = $_GET['book_id'];  // $_GET dapat. Bawal ang $_POST?
	
	mysqli_query ($con, "update book set status = 'Archive' where book_id='$book_id'") or die (mysql_error());
	
	header('location:../../book_all.php');

?>