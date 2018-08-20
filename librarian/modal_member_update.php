<div id="update_member<?php echo $member_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-info">
			<strong>Update Member</strong>
		</div>

		<?php 
			$query=mysqli_query($con,"select * from member where member_id = '$member_id'")or die(mysql_error());
			$row=mysqli_fetch_array($query);
		?>

		<form class="form-horizontal" method="post" action="controller/update/update_member.php">
			<div class="control-group">
				<label class="control-label">Firstname:</label>
				<div class="controls">
					<input type="hidden" id="member_id" name="member_id" value="<?php echo $row['member_id']; ?>" required>
					<input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Lastname:</label>
				<div class="controls">
					<input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Gender:</label>
				<div class="controls">
					<select name="gender" required>
						<option><?php echo $row['gender']; ?></option>
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Adddress:</label>
				<div class="controls">
					<input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Contact:</label>
				<div class="controls">
					<input type='tel' pattern="[0-9]{11,11}" class="search" name="contact" value="<?php echo $row['contact']; ?>"  autocomplete="off"  maxlength="11">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Type:</label>
				<div class="controls">
					<select name="type" required>
						<option><?php echo $row['type']; ?></option>
						<option></option>
						<option>Student</option>
						<option>Teacher</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Year Level:</label>
				<div class="controls">
					<select name="YearLevel" required>			
						<option><?php echo $row['YearLevel']; ?></option>
						<option></option>
						<option>First Year</option>
						<option>Second Year</option>
						<option>Third Year</option>
						<option>Fourth Year</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Department:</label>
				<div class="controls">
					<select name="Department" required>			
						<option><?php echo $row['Department']; ?></option>
						<option></option>
						<option>BSIT</option>
						<option>BSEcE</option>
						<option>BSIE</option>
						<option>BSEM</option>		
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Status:</label>
				<div class="controls">
					<select name="status" required>
						<option><?php echo $row['status']; ?></option>
						<option></option>
						<option>Active</option>
						<option>Banned</option>
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
