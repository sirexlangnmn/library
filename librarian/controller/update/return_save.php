<?php 

	include('../../dbcon.php');

	$id=$_GET['id'];
	$book_id = $_GET['book_id'];

	mysqli_query($con,"update borrow LEFT JOIN borrowdetails on borrow.borrow_id = borrowdetails.borrow_id   set borrow_status='returned',date_return= NOW() where borrow.borrow_id='$id' and borrowdetails.book_id = '$book_id'")or die(mysql_error());						
	 header('location:../../borrowed_view.php');

?>	