<div id="add_book" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-info"><strong>Add Book</strong></div>
		
		<form class="form-horizontal" method="post" action="controller/insert/insert_book.php">
			<div class="control-group">
				<label class="control-label">Book_title:</label>
				<div class="controls">
					<input type="text" id="book_title" name="book_title"  placeholder="Book Title" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Category</label>
				<div class="controls">
					<select name="category_id">
						<option disabled="">Choose Category Here</option>
						<option></option>
						<?php
							$category_query = mysqli_query($con,"select * from category");
							while($category_row = mysqli_fetch_array($category_query))
							{
						?>
							<option value="<?php echo $category_row['category_id']; ?>">
							<?php echo $category_row['classname']; ?>
							</option>
						<?php  } ?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Author:</label>
				<div class="controls">
					<input type="text" id="author" name="author" placeholder="Author" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Book Copies:</label>
				<div class="controls">
					<input type="text" class="span1" id="inputPassword" name="book_copies" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Book Publication:</label>
				<div class="controls">
					<input type="text" id="book_pub" name="book_pub" placeholder="Book Publication" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Publisher Name:</label>
				<div class="controls">
					<input type="text" id="publisher_name" name="publisher_name" placeholder="Publisher Name" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">ISBN:</label>
				<div class="controls">
					<input type="text" id="isbn" name="isbn" placeholder="ISBN" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Copyright Year:</label>
				<div class="controls">
					<input type="text" id="copyright_year" name="copyright_year" placeholder="Copyright Year" required>
				</div>
			</div>						
				<div class="control-group">							
					<label class="control-label">Status:</label>
					<div class="controls">
						<select name="status" required>
							<option></option>
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
					<button name="submit" type="submit" id="submit" class="btn btn-success">
						<i class="icon-save icon-large"></i>&nbsp;Save
					</button>
				</div>
			</div>
	    </form>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>

