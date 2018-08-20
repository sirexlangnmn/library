<div id="add_member" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">
		<div class="alert alert-info"><strong>Add Member</strong></div>
		
		<form class="form-horizontal" method="post" action="controller/insert/insert_member.php">
			<div class="control-group">
				<label class="control-label">Firstname:</label>
				<div class="controls">
					<input type="text" id="firstname" name="firstname" placeholder="Firstname" required>
				</div>
			</div>					
			<div class="control-group">
				<label class="control-label">Lastname:</label>
				<div class="controls">
					<input type="text" id="lastname" name="lastname" placeholder="Lastname" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Gender:</label>
				<div class="controls">
					<select name="gender" required>
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Adddress:</label>
				<div class="controls">
					<input type="text" id="address" name="address" placeholder="Address" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Cellphone Number:</label>
				<div class="controls">
					<input type='tel' pattern="[0-9]{11,11}" class="search" name="contact" placeholder="Phone Number" autocomplete="on"  maxlength="11" >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Type:</label>
				<div class="controls">
					<select name="type" required>	
						<option></option>
						<option>Student</option>
						<option>Teacher</option>				
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">YearLevel:</label>
				<div class="controls">
					<select name="YearLevel" >
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
					<select name="Department" >			
						<option></option>
						<option>BSIT</option>
						<option>BSEcE</option>
						<option>BSIE</option>
						<option>BSEM</option>
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

