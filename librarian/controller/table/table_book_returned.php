<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>
    <tr>
        <th>Book title</th>                                 
        <th>Borrower</th>                                 
        <th>YearLevel/Course</th>
		<th>Department</th>   										
        <th>Date Borrow</th>                                 
        <th>Due Date</th>                                
        <th>Date Returned</th>

    </tr>
</thead>
<tbody>

	<?php
		$user_query=mysqli_query($con,"select * from borrow
		LEFT JOIN member ON borrow.member_id = member.member_id
		LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
		LEFT JOIN book on borrowdetails.book_id =  book.book_id 
		where borrowdetails.borrow_status = 'returned' ORDER BY borrow.borrow_id DESC
	  ")or die(mysql_error());
		
		while($row=mysqli_fetch_array($user_query))
		{
			$id=$row['borrow_id'];
			$book_id=$row['book_id'];
			$borrow_details_id=$row['borrow_details_id'];
		?>
		<tr class="del<?php echo $id ?>">
		    <td><?php echo $row['book_title']; ?></td>
		    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
		    <td><?php echo $row['YearLevel']; ?></td>
			<td><?php echo $row['Department']; ?></td>
			<td><?php echo $row['date_borrow']; ?></td> 
		    <td><?php echo $row['due_date']; ?> </td>
			<td><?php echo $row['date_return']; ?> </td>		 
	    </tr>
		<?php  }  ?>
</tbody>
</table>