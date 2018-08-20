<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
<thead>
    <tr>
        <th>Acc No.</th>                                 
        <th>Book title</th>                                 
        <th>Category</th>							
		<th>Author</th>
		<th class="action">copies</th>
		<th>Publisher name</th>
		<th>status</th>
		<th>Add</th>
    </tr>
</thead>
<tbody>
<?php
	$book_query = mysqli_query($con,"select * from book where (status != 'Archive') && (status != 'lost') ")or die(mysql_error());
	while ($row=mysqli_fetch_array($book_query))
	{
		$book_id=$row['book_id'];  
		$category_id=$row['category_id'];
		$book_copies = $row['book_copies'];
	
		$borrow_details = mysqli_query($con,"select * from borrowdetails where book_id = '$book_id' and borrow_status = 'pending'");
		$row11 = mysqli_fetch_array($borrow_details);
		$count = mysqli_num_rows($borrow_details);
	
		$total =  $book_copies  -  $count; 
		if ($total == 0 )
		{
			$total == "Not available";
		}


		$category_query = mysqli_query($con,"select * from category where category_id = '$category_id'")or die(mysql_error());
		$category_row = mysqli_fetch_array($category_query);
	?>

	<tr class="del<?php echo $book_id ?>">                              
	    <td><?php echo $row['book_id']; ?></td>
	    <td><?php echo $row['book_title']; ?></td>
		<td><?php echo $category_row ['classname']; ?> </td>								
	    <td><?php echo $row['author']; ?> </td> 
	    <td class="action"><?php echo $total; ?> </td>
		<td><?php echo $row['publisher_name']; ?></td>
		<td><?php echo $row['status']; ?></td> 
	    <td width="20">
			<input class = "uniform_on" 
				   title = "Checkbox" 
				   id    = "tooltip_checkbox<?php echo $book_id; ?>" 
				   name  = "selector[]" 
				   type  = "checkbox" 
				   value = "<?php echo $book_id; ?>" >
	    </td>
	    <?php include('toolttip_edit_delete.php'); ?>
	</tr>
<?php  }  ?>
</tbody>
<tfoot>
    <tr>
        <th>Acc No.</th>                                 
        <th>Book title</th>                                 
        <th>Category</th>							
		<th>Author</th>
		<th class="action">copies</th>
		<th>Publisher name</th>
		<th>status</th>
		<th>Add</th>
    </tr>
</tfoot>
</table>	