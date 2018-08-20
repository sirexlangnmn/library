<div id="add_user" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-info"><strong>Add Admin User</strong></div>
		
		<form class="form-horizontal" method="post" action="controller/insert/insert_admin.php">
			<div class="control-group">
				<label class="control-label">Username</label>
				<div class="controls">
					<input type="text" id="username" name="username" placeholder="Username" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<input type="password" name="password" id="password" placeholder="Password" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Full Name</label>
				<div class="controls">
					<input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Mobile</label>
				<div class="controls">
					<input type="text" id="mobile_number" name="mobile_number" placeholder="Mobile Number" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Email</label>
				<div class="controls">
					<input type="email" id="email" name="email" placeholder="Email" required>
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

