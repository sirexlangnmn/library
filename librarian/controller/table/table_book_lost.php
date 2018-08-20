<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">	
<thead>
    <tr>
	    <th>Acc No.</th>                                 
        <th>Book Title</th>                                 
        <th>Category</th>
		<th>Author</th>
		<th class="action">copies</th>
		<th>Book Pub</th>
		<th>Publisher Name</th>
		<th>ISBN</th>
		<th>Copyright Year</th>
		<th>Date Added</th>
		<th>Status</th>
		<th class="action">Action</th>		
    </tr>
</thead>
<tbody>
<?php
	
	$lost_query=mysqli_query($con,"select * from book where status = 'lost'")or die(mysql_error());
	while($row=mysqli_fetch_array($lost_query))
	{
		$book_id = $row['book_id'];  
		$category_id = $row['category_id'];
		$book_copies = $row['book_copies'];

		$borrow_details = mysqli_query($con,"select * from borrowdetails where book_id = '$book_id' and borrow_status = 'pending'");
		$row11 = mysqli_fetch_array($borrow_details);
		$count = mysqli_num_rows($borrow_details);

		$total =  $book_copies  -  $count; 

		

		$category_query = mysqli_query($con,"select * from category where category_id = '$category_id'")or die(mysql_error());
		$category_row = mysqli_fetch_array($category_query);
	?>
	<tr class="del<?php echo $book_id ?>">
	    <td><?php echo $row['book_id']; ?></td>
	    <td><?php echo $row['book_title']; ?></td>
		<td><?php echo $category_row ['classname']; ?> </td>
	    <td><?php echo $row['author']; ?> </td> 
	    <td class="action"><?php echo $total; ?> </td>
	    <td><?php echo $row['book_pub']; ?></td>
		<td><?php echo $row['publisher_name']; ?></td>
		<td><?php echo $row['isbn']; ?></td>
		<td><?php echo $row['copyright_year']; ?></td>		
		<td><?php echo $row['date_added']; ?></td>
		<td><?php echo $row['status']; ?></td>
	    <td class="action">
	    	<a rel         = "tooltip" 
			   title       = "Update" 
			   id          = "tooltip_update<?php echo $book_id; ?>" 
			   href        = "#update_book<?php echo $book_id; ?>" 
			   data-toggle = "modal"
			   class       = "btn btn-success">
			<i class = "icon-pencil icon-large"></i>
			</a>
			<?php include('modal_book_update.php'); ?>

	        <a rel         = "tooltip" 
	           title       = "Delete" 
	           id          = "tooltip_delete<?php echo $book_id; ?>" 
	           href        = "#delete_book<?php echo $book_id; ?>" 
	           data-toggle = "modal" 
	           class       = "btn btn-danger">
	        <i class="icon-trash icon-large"></i>
	        </a>
	        <?php include('modal_book_delete.php'); ?>
	    </td>
	    <?php include('toolttip_edit_delete.php'); ?>
	</tr>
<?php  }  ?>
</tbody>
 <tfoot>
    <tr>
	    <th>Acc No.</th>                                 
        <th>Book Title</th>                                 
        <th>Category</th>
		<th>Author</th>
		<th class="action">copies</th>
		<th>Book Pub</th>
		<th>Publisher Name</th>
		<th>ISBN</th>
		<th>Copyright Year</th>
		<th>Date Added</th>
		<th>Status</th>
		<th class="action">Action</th>		
    </tr>
</tfoot>
</table>