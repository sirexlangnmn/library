<div id="update_admin<?php echo $user_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-info">
			<strong>Update User</strong>
		</div>
		<form class="form-horizontal" method="post" action="controller/update/update_admin.php">
			<div class="control-group">
				<label class="control-label">Username</label>
				<div class="controls">
				<input type="hidden" id="user_id" name="user_id" value="<?php echo $row['user_id']; ?>" required>
				<input type="text" id="username" name="username" value="<?php echo $row['username']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
				<input type="text" name="password" id="inputPassword" value="<?php echo $row['password']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Fullname</label>
				<div class="controls">
				<input type="text" id="fullname" name="fullname" value="<?php echo $row['fullname']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Mobile Number</label>
				<div class="controls">
				<input type="text" id="mobile_number" name="mobile_number" value="<?php echo $row['mobile_number']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
				<input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
	</div>
</div>
