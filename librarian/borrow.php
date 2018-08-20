<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">
					<div class="alert alert-info">
	                    <button type="button" class="close" data-dismiss="alert">&times;</button>
	                    <strong><i class="icon-user icon-large"></i>&nbsp;Borrow Table</strong>
	                </div>

					<form method="post" action="controller/insert/insert_borrow.php">
						<ul class="nav nav-pills">
							<li style="margin-right: 30px;">
								<label class="control-label">Borrower Name</label>
								<div class="controls">
									<select name="member_id" class="chzn-select" required/>
										<option></option>
										<?php $result =  mysqli_query($con,"select * from member")or die(mysql_error()); 
										while ($row=mysqli_fetch_array($result))
										{ ?>
										<option value="<?php echo $row['member_id']; ?>"><?php echo $row['firstname']." ".$row['lastname']; ?></option>
										<?php } ?>
									</select>
								</div>	
							</li>
							<li>
								<div class="control-group"> <!-- Calendar --> 
								<label class="control-label">Due Date</label>
								<div class="controls">
									<input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="due_date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
								</div>
							</div>	<!-- Calendar -->
							</li>
							<li style="margin-top: 25px; margin-left: 30px">
								<div class="control-group"> <!-- Borrow button --> 
									<div class="controls">
										<button name="delete_student" class="btn btn-success"><i class="icon-plus-sign icon-large"></i> Borrow</button>
									</div>
								</div> <!-- Borrow button -->			
							</li>
						</ul>
			

		
						<div class="alert alert-success">
						<p><strong>Note:</strong> 
						1.Choose borrower name &nbsp 
						2. Select due date &nbsp 
						3. Select Books (Maximum of three.)
						4. It is not available if the book copies reach "0"</p>
						</div>
							
						<!-- table here -->
				        <?php
				          include('controller/table/table_book_borrow.php');
				        ?>
						<!-- table here -->	

					
					</form>


					<script>		
					$(".uniform_on").change(function(){
					    var max= 3;
					    if( $(".uniform_on:checked").length == max ){
						
					        $(".uniform_on").attr('disabled', 'disabled');
							         alert('3 Books are allowed per borrow');
					        $(".uniform_on:checked").removeAttr('disabled');
							
					    }else{

					         $(".uniform_on").removeAttr('disabled');
					    }
					})
					</script>

			</div>
		</div>
    </div>
</div>
<?php include('footer.php') ?>