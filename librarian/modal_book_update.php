<div id="update_book<?php echo $book_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-info">
			<strong>Update Book Details</strong>
		</div>

		<?php 
			$query = mysqli_query($con,"select * from book LEFT JOIN category on category.category_id  = book.category_id where book_id='$book_id'")or die(mysql_error());
			$row=mysqli_fetch_array($query);
			$category_id = $row['category_id'];
		?>

		<form class="form-horizontal" method="post" action="controller/update/update_book.php" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label">Book Title:</label>
				<div class="controls">
					<input type="hidden" id="book_id" name="book_id" value="<?php echo $book_id; ?>" required>
					<input type="text" id="book_title" name="book_title" value="<?php echo $row['book_title']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Category:</label>
				<div class="controls">
					<select name="category_id">
						<option value="<?php echo $category_id; ?>"><?php echo $row['classname']; ?></option>
						<?php 
							$query1 = mysqli_query($con,"select * from category where category_id != '$category_id'")or die(mysql_error());
							while($row1 = mysqli_fetch_array($query1))
							{
						?>
							<option value="<?php echo $row1['category_id']; ?>"><?php echo $row1['classname']; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Author:</label>
				<div class="controls">
					<input type="text" id="author" name="author" value="<?php echo $row['author']; ?>"required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Book_copies:</label>
				<div class="controls">
					<input class="span1" type="text" id="book_copies" name="book_copies" value="<?php echo $row['book_copies']; ?>"required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Book Publication:</label>
				<div class="controls">
					<input type="text" id="book_pub" name="book_pub" value="<?php echo $row['book_pub']; ?>" required>
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label">Publisher_name:</label>
				<div class="controls">
					<input type="text" id="publisher_name" name="publisher_name" value="<?php echo $row['publisher_name']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">ISBN:</label>
				<div class="controls">
					<input type="text" id="isbn" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="isbn" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" >Copyright_year:</label>
				<div class="controls">
				<input type="text" id="copyright_year" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" required>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="inputPassword">Status:</label>
				<div class="controls">
				<select name="status">
					<option><?php echo $row['status']; ?></option>
					<option>New</option>
					<option>Old</option>
					<option>Lost</option>
					<option>Damage</option>
					<option>Subject for Replacement</option>
				</select>
				</div>
			</div>
				<div class="control-group">
					<div class="controls">
					<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
					</div>
				</div>
			</form>
		</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>
